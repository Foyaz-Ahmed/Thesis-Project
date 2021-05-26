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
				<td>Result Value:</td>
				<td><input type="text" name="result_value" value="{{$hg['result_value']}}"></td>
			</tr>
			<tr>
				<td>Reference Value:</td>
				<td><input type="text" name="reference_value" value="{{$hg['reference_range']}}"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td><input type="date" name="date" value="{{$hg['date']}}"></td>
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