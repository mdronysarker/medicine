@extends('master')

@section('content')

<a href="{{route('volunteer.create')}}" class= 'btn btn-primary my-2'>Add New volunteer</a>
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
     <a href="{{route('volunteer.view', $data->id)}}"class="btn btn-info">View</a>
     <a href="{{route('volunteer.delete', $data->id)}}"class="btn btn-danger">Delete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$volunteers->links()}}
@endsection