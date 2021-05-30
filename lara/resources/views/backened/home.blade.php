@extends('backened.layouts.main')


@section('title')
    Dashboard Of user
@endsection

@section('content')
 @include('backened.partials.message')
<h1>Welcome {{ session('name') }}!</h1>
    
@endsection