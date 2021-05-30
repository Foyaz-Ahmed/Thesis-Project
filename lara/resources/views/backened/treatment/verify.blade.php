<!DOCTYPE html>
<html>
<head>
	<title>Verify Patient</title>
</head>
<body>
	<form method = "post" action="">
		@csrf
	    Search Patient Id:<input type="text" name="id" value="">
	    <input type="submit" name="submit" value="verify">
	</form>
</body>
</html>