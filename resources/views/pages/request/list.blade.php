@extends('master')


@section('content')


<table class="table">
  <thead>
   <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Nid</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  @foreach($request as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->nid}}</td>
      <td>{{$data->mobile_no}}</td>
      <td>{{$data->details}}</td>
    </tr>
@endforeach
  
  </tbody>
</table>

@endsection