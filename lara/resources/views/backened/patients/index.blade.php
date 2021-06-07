@extends('backened.layouts.main')

@section('title')
    All Patients Information
@endsection

@section('content')
    <h1 align="center">Patient List</h1>
    <div class="">
    <center>
        <a class="btn btn-success "href="{{route('patient.create')}}">Insert New</a>
    </center>
    <br><br>
    <table class="table table-striped ">
        <tr>
            <th>Patient Id</th>
            <th>National Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Blood Group</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Emergency Contact</th>
            <th>Image</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>
        </tr>
        @foreach($pt as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['p_nid']}}</td>
            <td>{{$value['p_name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['age']}}</td>
            <td>{{$value['phone']}}</td>
            <td>{{$value['blood_group']}}</td>
            <td>{{$value['gender']}}</td>
            <td>{{$value['address']}}</td>
            <td>{{$value['e_contact']}}</td>
            <td>
                <img src="{{ asset('images/profile_upload') }}/{{ $value['p_image'] }}" alt="" width="100px"
            height="100px">
            </td>
            <td>{{$value['dob']}}</td>
            <td>
                <a class="btn btn-primary "href="{{route('patient.edit', $value['id'])}}">Update</a>   
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>

@endsection