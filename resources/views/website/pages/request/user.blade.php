@extends('website.master')

@section('content')


<div class="container">
<form action="{{route('user.store')}}" method="post">
@csrf
<div class="medecine-req-form">
              <div class="medecine-req-form-heading">
                <h2>Request Now</h2>
              </div>
              <div class="medicine-req-forms">
                <div class="mb-3">
                  <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="mb-3">
                  <input name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your adress">
                </div>
                <div class="mb-3">
                  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <input name="nid" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your NID no">
                </div>
                <div class="mb-3">
                  <input name="mobile_no" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your mobile no">
                </div>
                <div class="form-floating mb-3">
             <textarea name="details" type='text' class="form-control" placeholder="Details" id="floatingTextarea2Disabled" style="height: 100px" ></textarea>
        
             </div>
                
              </div>
              <div class="medicine-req-forms-button">
                <button>REQUEST</button>
              </div>
            </div>
</form>
</div>



@endsection