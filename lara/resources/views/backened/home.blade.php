<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Patient</title>
</head>
<h1>Welcome {{ session('name') }}!</h1>
<body>
    <a href="{{route('dashboard.index') }}">Home</a>|
    <a href="{{ route('profile.index') }}">Profile</a>|
    <a href="{{ route('dashboard.treatments') }}">Treatments</a>|
    <a href="{{route('dashboard.reports')}}">Reports</a>|
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>