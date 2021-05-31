@extends('backened.layouts.main')


@section('title')
    Dashboard Of user
@endsection

@section('content')
 @include('backened.partials.message')
   <h1>Welcome {{ session('name') }}!</h1>
   <!-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Search</button> -->
@endsection