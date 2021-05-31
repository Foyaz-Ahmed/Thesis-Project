@extends('backened.layouts.main')

@section('title')
    Tratments Details
@endsection

@section('content')
	  

  <form method ="post" action="{{route('treatment.store')}}">
  	@csrf
	<table class="table table-responsive">
		<tr>
			<td>Doctors Name:</td>
			<td>
				<input type="txt" name="d_name" value="{{$d_user['d_name']}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</td>
		</tr>
		<tr>
			<td>Patient Id:</td>
			<td>
				<input type="txt" name="p_id" value="{{session('p_id')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</td>
		</tr>
		<tr>
			<td>Disease Details:</td>
			<td>
				<textarea class="form-control" name="d_details" id="exampleFormControlTextarea1" rows="3"></textarea>
			</td>
		
		</tr>
		<tr>
			<td>Medicine Details:</td>
			<td>
				<textarea class="form-control" name="m_details" id="exampleFormControlTextarea1" rows="3"></textarea>
			</td>
		</tr>
		<tr>
			<td>Remarks:</td>
			<td>
				<input type="txt" name="remarks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</td>
		</tr>
		<tr>
			<td>Date:</td>
			<td>
    			<input class="form-control" type="date" name="date" id="example-date-input">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="type" class="btn btn-primary btn-lg">Save</button></td>
		</tr>
	</table>
<form>
@endsection