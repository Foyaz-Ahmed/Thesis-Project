@extends('backened.layouts.main')

@section('title')
    All Doctors Information
@endsection

@section('content')
    <h1 align="center">Doctor List</h1>
    <div class="">
    <center>
        <a class="btn btn-success "href="{{route('doctor.create')}}">Insert New</a>
    </center>
    <br><br>
    <div class="main-content card-body>
  <section class="section">
<div class="card-body">
  @include('backened.partials.message')
  <div class="table-responsive table-invoice">
  <table class="table table-hover table-striped">
        <tr align="center">
    <!-- <table class="table table-striped table-invoice"> -->
        <!-- <tr> -->
            <th>Doctor Id</th>
            <th>National Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Blood Group</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Qualifications</th>
            <th>Status</th>
            <th>Duty Time</th>
            <th>Image</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>
        </tr>
        @foreach($dt as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['d_nid']}}</td>
            <td>{{$value['d_name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['d_age']}}</td>
            <td>{{$value['phone']}}</td>
            <td>{{$value['blood_group']}}</td>
            <td>{{$value['gender']}}</td>
            <td>{{$value['address']}}</td>
            <td>{{$value['qualification']}}</td>
            <td>{{$value['status']}}</td>
            <td>{{$value['duty_time']}}</td>
            <td>
                <img src="{{ asset('images/profile_upload/doctor') }}/{{ $value['d_image'] }}" alt="" width="100px"
            height="100px">
            </td>
            <td>{{$value['dob']}}</td>
            <td>
                <a class="btn btn-primary "href="{{route('doctor.edit', $value['id'])}}">Update</a>   
                <hr>
                <a class="btn btn-danger" href="#deleteModal{{ $value['id'] }}" data-toggle="modal">Delete</a>
            <hr>

           <!--  modal delete -->
           <div class="modal fade" id="deleteModal{{ $value['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form  action="{!! route('doctor.delete', $value['id']) !!}" method ="post">
                        @csrf
                         <button type="submit" class="btn btn-danger">Permanent Delete</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </div>
            </div>   
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>

@endsection