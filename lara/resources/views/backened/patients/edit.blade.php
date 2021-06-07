@extends('backened.layouts.main')

@section('title')
    Patient Update
@endsection

@section('content')
<div class="table_margin_profile">
	<form method="post" enctype="multipart/form-data" >
		@csrf
		<br><br>
		@include('backened.partials.message')

		<table class="table table-striped">
			<tr>
				<td>Patient Id:</td>
				<td><input class="form-control" type="text" name="id" value="{{$pt['id']}}"></td>
			</tr>
			<tr>
				<td>National Id:</td>
				<td><input class="form-control" type="text" name="p_nid" value="{{$pt['p_nid']}}"></td>
			</tr>
			
			<tr>
				<td>Patient Name:</td>
				<td><input class="form-control" type="text" name="p_name" value="{{$pt['p_name']}}"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input class="form-control" type="text" name="email" value="{{$pt['email']}}"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input class="form-control" type="password" name="password" value="{{$pt['password']}}"></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input class="form-control" type="text" name="age" value="{{$pt['age']}}"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input class="form-control" type="text" name="phone" value="{{$pt['phone']}}"></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td>
					<select name="blood_group" id="blood_group">
					  <option class="dropdown-menu" value="">Choose Option</option>
					  <option value="A+"  @if($pt['blood_group'] == 'A+') selected @endif>A+</option>
					  <option value="A-" @if($pt['blood_group'] == 'A-') selected @endif>A-</option>
					  <option value="B+" @if($pt['blood_group'] == 'B+') selected @endif>B+</option>
					  <option value="B-" @if($pt['blood_group'] == 'B-') selected @endif>B-</option>
					  <option value="O+" @if($pt['blood_group'] == 'O+') selected @endif>O+</option>
					  <option value="O-" @if($pt['blood_group'] == 'O-') selected @endif>O-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
			    <td>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Male"  @if($pt['gender'] == 'Male') checked @endif>
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Male
 					 </label>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Female" @if($pt['gender'] == 'Female') checked @endif>
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Female
 					 </label>
			    </td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input class="form-control" type="text" name="address" value="{{$pt['address']}}"></td>
			</tr>
			<tr>
				<td>Emergency Contact</td>
				<td><input class="form-control" type="text" name="e_contact" value="{{$pt['e_contact']}}"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input class="form-control" type="date" name="dob"  value="{{$pt['dob']}}"></td>
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