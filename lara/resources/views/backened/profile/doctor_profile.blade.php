@extends('backened.layouts.main')

@section('title')
    Profile of Doctors
@endsection

@section('content')
<div class="main-content card-body>
  <section class="section">
<div class="card-body">
<div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
        <tr>
            <td>Profile Image:</td>
            <td><img src="{{ asset('images/profile_upload/doctor') }}/{{ $profiledata['d_image'] }}" alt="" width="100px"
            height="100px"></td>
        </tr>
        <tr>
            <td>Id:</td>
            <td>{{ $profiledata['id']  }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $profiledata['d_name']  }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $profiledata['email']  }}</td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>{{ $profiledata['password']  }}</td>
        </tr>
        <tr>
            <td>National Id:</td>
            <td>{{ $profiledata['d_nid']  }}</td>
        </tr>
        <tr>
            <td>Qualifications:</td>
            <td>{{ $profiledata['qualification']  }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $profiledata['gender']  }}</td>
        </tr>
        <tr>
            <td>Age:</td>
            <td>{{ $profiledata['d_age']  }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $profiledata['phone']  }}</td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>{{ $profiledata['blood_group']  }}</td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>{{ $profiledata['address']  }}</td>
        </tr>
        <tr>
            <td>Duty Time:</td>
            <td>{{ $profiledata['duty_time']  }}</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>{{ $profiledata['dob']  }}</td>
        </tr>
    </table>

</div>
</div>
@endsection