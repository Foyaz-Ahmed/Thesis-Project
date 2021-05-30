<!DOCTYPE html>
<html>
<head>
	<title>Create Treatments</title>
</head>
<body>
	<h1>Create Treatments</h1>
	  

  <form method ="post" action="{{route('treatment.store')}}">
  	@csrf
	<table>
		<tr>
			<td>Doctors Name:</td>
			<td><input type="txt" name="d_name" value="{{$d_user['d_name']}}"></td>
		</tr>
		<tr>
			<td>Patient Id:</td>
			<td><input type="txt" name="p_id" value="{{session('p_id')}}"></td>
		</tr>
		<tr>
			<td>Disease Details:</td>
			<td><textarea cols="30" rows="10" name="d_details"></textarea></td>
		</tr>
		<tr>
			<td>Medicine Details:</td>
			<td><textarea cols="30" rows="10" name="m_details"></textarea></td>
		</tr>
		<tr>
			<td>Remarks:</td>
			<td><input type="txt" name="remarks"></td>
		</tr>
		<tr>
			<td>Date:</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"</td>
			<td></td>
		</tr>
	</table>
<form>

</body>
</html>