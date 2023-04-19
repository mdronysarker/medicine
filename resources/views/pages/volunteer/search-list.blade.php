@extends('master')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($volunteers as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->user_email}}</td>
      <td>{{$data->mobile_no}}</td>
      <td> 
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection