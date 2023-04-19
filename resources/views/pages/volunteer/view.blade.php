@extends('master')

@section('content')

<label for="">Name:</label>
<input type="text" value="{{$volunteer->name}}" readonly class="form-control">
<label for="">Email</label>
<input type="text" value="{{$volunteer->user_email}}" readonly class="form-control">
<label for="">Mobile</label>
<input type="text" value="{{$volunteer->mobile_no}}" readonly class="form-control">

<a href="{{route('volunteer.list')}}" class="btn btn-success">Back</a>


@endsection