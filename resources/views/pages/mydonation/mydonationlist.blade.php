@extends('master')

@section('content')

<table class="table">
  <thead>
   
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Donation Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mydonations as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->medicine->name}}</td>
      <td>{{$data->quantity}}</td>
      <td></td>
    </tr>

    @endforeach
  
  </tbody>
</table>
{{$mydonations->links()}}



@endsection