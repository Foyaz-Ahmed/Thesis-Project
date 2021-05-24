<!DOCTYPE html>
<html>
<head>
	<title>Verify Doctor</title>
</head>
<body>
	<form method = "post" action="">
		@csrf
	    Give Doctor's Id:<input type="text" name="id">
	    <input type="submit" name="submit" value="verify">
	</form>
</body>
</html>