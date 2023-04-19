@extends('master')

@section('content')

   

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     

    </tr>
  </thead>
  <tbody>
  @foreach($donors as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      </tr>

    @endforeach

  </tbody>
</table>


@endsection