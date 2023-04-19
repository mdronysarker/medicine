@extends('master')

@section('content')

<a href="{{route('brand.create')}}" class= 'btn btn-primary my-2'>Add New Brand</a>
  <table class="table">
  <thead>
  @foreach($brands as $key=>$data)
    <tr>
      <th scope="col">{{$key+1}}</th>
      <th scope="col">{{$data->name}}</th>
      <th scope="col">{{$data->status}}</th>
    </tr>
    @endforeach
  </thead>
  <tbody>
 
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
    </tr>
  
  </tbody>
</table>

{{$brands->links()}}


@endsection