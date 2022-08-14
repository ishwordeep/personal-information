@extends('layout.layout')

@section('title', 'PersonalInfo')


@section('content')
<div class="container mt-4">
    <a href="{{route('create.information')}}"><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus px-1"></i>Add Information</button></a>

    <div class="card main-container mt-3 mb-2">

        <table class="table table-hover " id="information-table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mode Of Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informations as $key=>$information)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$information['name']}}</td>
                    <td>{{$information['phone']}}</td>
                    <td>{{$information['email']}}</td>
                    <td>{{$information['address']}}</td>
                    <td>{{$information['modeofcontact']}}</td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="{{route('show.information',$information['id'])}}"><button type="button" class="btn btn-outline-dark border-0"> <i class="fa-solid fa-eye text-success"></i></button></a>

                            <form action="{{route('delete.information',$information['id'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-dark border-0"><i class="fa-solid fa-calendar-minus  text-danger"></i></button>
                            </form>
                        </div>

                    </td>
                </tr>
                @endforeach
                @if(count($informations)<1)
                    <td colspan="7" class="text-center">No information available </td>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
