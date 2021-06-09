@extends('backened.layouts.main')

@section('title')
    Doctors Update
@endsection

@section('content')
<div class="table_margin_profile">
	<form method="post" enctype="multipart/form-data" >
		@csrf
		<br><br>
		@include('backened.partials.message')

		<table class="table table-striped">
			<tr>
				<td>Doctors Id:</td>
				<td><input class="form-control" type="text" name="id" value="{{$dc['id']}}"></td>
			</tr>
			<tr>
				<td>National Id:</td>
				<td><input class="form-control" type="text" name="d_nid" value="{{$dc['d_nid']}}"></td>
			</tr>
			<tr>
				<td>Doctor Name:</td>
				<td><input class="form-control" type="text" name="d_name" value="{{$dc['d_name']}}"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input class="form-control" type="text" name="email" value="{{$dc['email']}}"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input class="form-control" type="password" name="password" value="{{$dc['password']}}"></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input class="form-control" type="text" name="age" value="{{$dc['d_age']}}"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input class="form-control" type="text" name="phone" value="{{$dc['phone']}}"></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td>
					<select name="blood_group" id="blood_group">
					  <option class="dropdown-menu" value="">Choose Option</option>
					  <option value="A+"  @if($dc['blood_group'] == 'A+') selected @endif>A+</option>
					  <option value="A-" @if($dc['blood_group'] == 'A-') selected @endif>A-</option>
					  <option value="B+" @if($dc['blood_group'] == 'B+') selected @endif>B+</option>
					  <option value="B-" @if($dc['blood_group'] == 'B-') selected @endif>B-</option>
					  <option value="O+" @if($dc['blood_group'] == 'O+') selected @endif>O+</option>
					  <option value="O-" @if($dc['blood_group'] == 'O-') selected @endif>O-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
			    <td>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Male"  @if($dc['gender'] == 'Male') checked @endif>
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Male
 					 </label>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Female" @if($dc['gender'] == 'Female') checked @endif>
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Female
 					 </label>
			    </td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input class="form-control" type="text" name="address" value="{{$dc['address']}}"></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><input class="form-control" type="text" name="qualification" value="{{$dc['qualification']}}"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input class="form-control" type="text" name="status" value="{{$dc['status']}}"></td>
			</tr>
			<tr>
				<td>Duty Time</td>
				<td><input class="form-control" type="text" name="duty_time" value="{{$dc['duty_time']}}"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input class="form-control" type="date" name="dob"  value="{{$dc['dob']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Update</button>
				</td>
			</tr>
		</table>
	</form>
</div>
@endsection