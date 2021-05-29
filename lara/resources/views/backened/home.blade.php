@extends('backened.layouts.main')


@section('title')
    Dashboard Of user
@endsection

@section('content')
<h1>Welcome {{ session('name') }}!</h1>
    
@endsection