@extends('master')

@section('content')

<a href="{{route('category.create')}}" class= 'btn btn-primary my-2'>Add New Category</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categoryies as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$categoryies->links()}}



@endsection