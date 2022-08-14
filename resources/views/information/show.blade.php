@extends('layout.layout')

@section('title', 'PersonalInfo')


@section('content')
<div class="container text-light">
<h6>Name:{{$info['name']}}</h6>
<h6>Date of Birth:{{$info['dob']}}</h6>
<h6>Address:{{$info['address']}}</h6>
<h6>Gender:{{$info['gender']}}</h6>
<h6>Email:{{$info['email']}}</h6>
<h6>Nationality:{{$info['nationality']}}</h6>
<h6>Mode of Contact:{{$info['modeofcontact']}}</h6>
<h6>Education Background:</h6><p>{{$info['education']}}</p>

</div>
@endsection