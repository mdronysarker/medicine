@extends('master')

@section('content')


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-lg-6">
   <form action="{{route('category.store')}}" method ='post'>
           @csrf
             <div class="medecine-req-form">
              <div class="medecine-req-form-heading my-3">
                <h2>Category</h2>
              </div>
              <div class="medicine-req-forms">
                <div class="mb-3">
                  <input  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name ='name'>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="status" name = 'status'>
                </div>
                <button type = 'submit' class = 'btn btn-success'>Submit</button>
              </div>
            </div>
        </form>
    </div>
          <div class="col-md-3"></div>
        </div>


@endsection