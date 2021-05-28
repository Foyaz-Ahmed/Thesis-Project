<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard Patient</title>
</head>
<h1>Welcome {{ session('name') }}!</h1>
<h1>{{session('type') }}</h1>
<body>

    <a href="{{route('dashboard.index') }}">Home</a>|
    
    @if(session('type') == "01" )
    <a href="{{ route('profile.index') }}">Profile</a>|
    <a href="{{ route('dashboard.treatments') }}">Treatments</a>|
    <a href="{{route('dashboard.reports')}}">Reports</a>|
    @endif
    @if(session('type') == "10")
     <h1>Doctor</h1>
    @endif
    @if(session('type') == "20")
     <h1>Medical Health Recorder</h1>
     <a href="{{ route('profile.recorder.index') }}">Profile</a>|
     <a href="{{ route('reports.create') }}">Add Report</a>|
     <a href="{{ route('hemoglobin.reports.all') }}">Reports</a>|
    @endif
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>