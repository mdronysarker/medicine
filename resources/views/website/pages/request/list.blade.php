@extends('website.master')

@section('content')

<div class="container ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Donor Name</th>
      <th scope="col">Donor Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Medicine Type</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($donations as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->donor_name}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->mobile_no}}</td>
      <td>{{$data->medicine->name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->medicine_type}}</td>
      <td>{{$data->e_date}}</td>
      <td><a href="{{route('user.req',$data->id)}}" class="btn  btn-primary">Request</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

{{$donations->links()}}
</div>


@endsection