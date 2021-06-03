@extends('backened.layouts.main')

@section('title')
    Cholesterol Report Insert
@endsection

@section('content')
	<form method="post">
		@csrf
		<table class="table table-responsive">
			<tr>
				<td>Patient Id:</td>
				<td><input class="form-control" type="text" name="id"></td>
			</tr>
			<tr>
				<td>Result Value:</td>
				<td><input class="form-control" type="text" name="result_value"></td>
			</tr>
			<tr>
				<td>Reference Value:</td>
				<td><input class="form-control" type="text" name="reference_value" value="5.6-5.7"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input class="form-control" type="date" name="date"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="type" class="btn btn-primary btn-lg">Insert</button></td
			</tr>
			<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
        	</ul>
		</table>
	</form>
@endsection