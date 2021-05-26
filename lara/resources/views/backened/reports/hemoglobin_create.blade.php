<!DOCTYPE html>
<html>
<head>
	<title>Add Himoglobin Reports</title>
</head>
<body>
	<form method="post">
		@csrf
		<table>
			<tr>
				<td>Patient Id:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Result Value:</td>
				<td><input type="text" name="result_value"></td>
			</tr>
			<tr>
				<td>Reference Value:</td>
				<td><input type="text" name="reference_value" value="1.5-1.7"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
			<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
        	</ul>
		</table>
	</form>
</body>
</html>