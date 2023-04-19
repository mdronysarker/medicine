@extends('master')

@section('content')

<a href="{{route('medicine.create')}}" class= 'btn btn-primary my-2'>Add New Medicine</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Category Id</th>
      <th scope="col">Brand Id</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($medicines as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->category->name}}</td>
      <td>{{$data->brand->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->group_name}}</td>
      <td>{{$data->image}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$medicines->links()}}

@endsection

