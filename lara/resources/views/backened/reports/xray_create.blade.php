@extends('backened.layouts.main')

@section('title')
    Xray Report Insert
@endsection

@section('content')
	<form method="post" enctype="multipart/form-data">
		@csrf
		@include('backened.partials.message')
		<table class="table table-responsive">
			<tr>
				<td>Patient Id:</td>
				<td><input class="form-control" type="text" name="id"></td>
			</tr>
			<tr>
				<td>Upload X-ray Image:</td>
			    <td><input type="file" class="form-control" id="" name="myfile" ></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input class="form-control" type="date" name="date"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit" class="btn btn-primary btn-lg">Insert</button></td>
			</tr>
			<!-- <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
        	</ul> -->
		</table>
	</form>
@endsection