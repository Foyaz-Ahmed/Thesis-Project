@extends('backened.layouts.main')

@section('title')
    Profile of Health Recorder
@endsection

@section('content')
<div class="table_margin_profile">
	<h3 class="profileh" align="center">Health Recorder Profile</h3>
	<table class="table table-striped">
        <tr>
            <td>Profile Image:</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Id:</td>
            <td></td>
            <td>{{ $profiledata['id']  }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td></td>
            <td>{{ $profiledata['name']  }}</td>
        </tr>
        <tr>
            <td>National Id:</td>
            <td></td>
            <td>{{ $profiledata['a_nid']  }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td></td>
            <td>{{ $profiledata['email']  }}</td>
        </tr>
        <tr>
            <td>Password:</td>
            <td></td>
            <td>{{ $profiledata['password']  }}</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td></td>
            <td>{{ $profiledata['type']  }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td></td>
            <td>{{ $profiledata['phone']  }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td></td>
            <td>{{ $profiledata['gender']  }}</td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td></td>
            <td>{{ $profiledata['blood_group']  }}</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td></td>
            <td>{{ $profiledata['dob']  }}</td>
        </tr>
    </table>
</div>
</div>
</div>
</div>
@endsection
