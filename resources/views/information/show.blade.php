@extends('layout.layout')

@section('title', 'PersonalInfo')


@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="row p-4">
            <div class="col-6 ">
                <p><strong>Name: </strong>{{$info['name']}}</p>
                <p><strong>Date of Birth: </strong>{{$info['dob']}}</p>
                <p><strong>Address: </strong>{{$info['address']}}</p>
                <p><strong>Gender: </strong>{{$info['gender']}}</p>
            </div>
            <div class="col-6">
                <p><strong>Email: </strong>{{$info['email']}}</p>
                <p><strong>Nationality: </strong>{{$info['nationality']}}</p>
                <p><strong>Mode of Contact: </strong>{{$info['modeofcontact']}}</p>
            </div>
        </div>
   
        <div class="row p-4">
            <p><strong>Education Background:</p></strong>
            <p>{{$info['education']}}</p>
        </div>

    </div>

</div>
@endsection
