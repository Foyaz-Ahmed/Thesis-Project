@extends('backened.layouts.main')

@section('title')
    Doctor Insert
@endsection

@section('content')
<div class="table_margin_profile">
	<form method="post" enctype="multipart/form-data" >
		@csrf
		<br><br>
		@include('backened.partials.message')

		<table class="table table-striped">
			<tr>
				<td>Doctor Id:</td>
				<td><input class="form-control" type="text" name="id"></td>
			</tr>
			<tr>
				<td>National Id:</td>
				<td><input class="form-control" type="text" name="d_nid"></td>
			</tr>
			
			<tr>
				<td>Doctor Name:</td>
				<td><input class="form-control" type="text" name="d_name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input class="form-control" type="text" name="password"></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input class="form-control" type="text" name="age"></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input class="form-control" type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Blood Group:</td>
				<td>
					<select name="blood_group" id="blood_group">
					  <option class="dropdown-menu" value="">Choose Option</option>
					  <option value="A+">A+</option>
					  <option value="A-">A-</option>
					  <option value="B+">B+</option>
					  <option value="B-">B-</option>
					  <option value="O+">O+</option>
					  <option value="O-">O-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
			    <td>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Male" >
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Male
 					 </label>
			    	<input class="form-check-input" type="radio"  id="" name="gender" value="Female">
			    	<label class="form-check-label" for="flexRadioDefault1">
   						 Female
 					 </label>
			    </td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input class="form-control" type="text" name="address"></td>
			</tr>
			<tr>
				<td>Qualification</td>
				<td><input class="form-control" type="text" name="qualification" ></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input class="form-control" type="text" name="status" ></td>
			</tr>
			<tr>
				<td>Duty Time</td>
				<td><input class="form-control" type="text" name="duty_time" ></td>
			</tr>
			<tr>
				<td>Profile Image</td>
				<td><input class="form-control" type="file" name="myfile"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input class="form-control" type="date" name="dob"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">Insert</button>
				</td>
			</tr>
		</table>
	</form>
</div>
@endsection			






