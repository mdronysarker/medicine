@extends('master')

@section('content')

<div class="form_section">
      <form action="{{route('donationmed.store')}}" method="post">
      @csrf
        <div class="row mx-3 py-3">
          <div class="col bg me-5">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Donar Name:</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="donar name"
                name="name"
              />
            </div>
            <div>
                   <label for="">Medicine</label>
                   <select name="medicine_id" id="" class="form-control">
                    @foreach($medicines as $data)
                       <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                   </select>
               </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Expiry Date:</label
              >
              <input
                type="date"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Medicine"
                name="expiry"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Mobile Number:</label
              >
              <input
                type="number"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Medicine"
                name="number"
              />
            </div>
          </div>
          <div class="col bg">
            <div class="col bg me-5">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Address:</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="address"
                  name="address"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Quantity:</label
                >
                <input
                  type="number"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="Quantity"
                  name="quantity"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Medicine Type:</label
                >
                <select class="form-select" aria-label="Default select example" name="medicinetype">
                  <option selected>Select Medicine Type</option>
                  <option value="Tablet">Tablet</option>
                  <option value="Syrup">Syrup</option>
                  <option value="Injections">Injections</option>
                </select>
              </div>
             
            </div>
          </div>
        </div>
        <div>
          <button type="submit" class="btn-donate">
            DONATE
            <span><i class="fa-solid fa-arrow-right-long ms-2"></i></span>
          </button>
        </div>
      </form>
    </div>


@endsection