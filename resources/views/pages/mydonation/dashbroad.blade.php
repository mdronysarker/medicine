@extends('master')

@section('content')


<div class="container">
<div class="row mt-5">
    <div class="col-md-2">
  <img src="/images/donar233.png" alt="hii">
  <h4 class="text-center mt-3">Donor</h4>
    </div>
    <div class="col-md-10">
      <div class="">
        Name: <span class="ms-5">{{auth()->user()->name}}</span>
      </div>
       <div>
        Email: <span class="ms-5">{{auth()->user()->email}}</span>
       </div>
    </div>
</div>
</div>

@endsection