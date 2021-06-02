@extends('backened.layouts.main')

@section('title')
    Creatinine Test Update
@endsection

@section('content')
	<form method="post">
		@csrf
		<table class="table table-responsive">
			@foreach($crt as $value)
			<tr>
				<td>Result Value:</td>
				<td><input type="text" name="result_value" value="{{$value['result_value']}}" class="form-control"></td>
			</tr>
			<tr>
				<td>Reference Value:</td>
				<td>
				<input type="txt" name="reference_value" value="{{$value['reference_range']}}" class="form-control" id="1" aria-describedby="emailHelp">
				</td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
				<input type="date" name="date" value="{{$value['date']}}" class="form-control" id="1" aria-describedby="emailHelp">
			</td>
			</tr>
			@endforeach
			<tr>
			<td></td>
			<td><button type="type" class="btn btn-primary btn-lg">Save</button></td>
			</tr>
			<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
        	</ul>
		</table>
	</form>
@endsection