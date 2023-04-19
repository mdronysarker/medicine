@extends('master')

@section('content')


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-lg-6">
   <form action="{{route('medicine.store')}}" method ='post'>
           @csrf
             <div class="medecine-req-form">
              <div class="medecine-req-form-heading my-3">
                <h2>Medicine List</h2>
              </div>
              <div class="medicine-req-forms">
                <div class="mb-3">
                  <input  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Medicine Name" name ='name'>
                </div>
                <div>
               <label for="category_id">Category Nmae</label>
                  <select name="category_id" id=""class="form-control"> 
                    @foreach($categories as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>

                <div>
               <label for="brand_id">Brand Name</label>
                  <select name="brand_id" id=""class="form-control"> 
                    @foreach($brands as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                  </select>
               </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Status" name = 'status'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Group Name" name = 'group_name'>
                </div>
                <div class="mb-3">
                  <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Image" name = 'image'>
                </div>
                <button type = 'submit' class = 'btn btn-success'>Submit</button>
              </div>
            </div>
        </form>
    </div>
          <div class="col-md-3"></div>
        </div>


@endsection