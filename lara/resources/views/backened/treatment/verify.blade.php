@extends('backened.layouts.main')
@section('title')
    Vefify Patient
@endsection

@section('content')
   <div  class="margin_body1">
   	@include('backened.partials.message')
   <form method = "post" action="">
		@csrf
	    Search Patient Id:<input type="text" name="id" value="">
	    <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
@endsection