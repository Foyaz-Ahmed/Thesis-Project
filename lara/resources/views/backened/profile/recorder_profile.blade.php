<!DOCTYPE html>
<html>
<head>
	<title>Recorder Profile</title>
</head>
<body>
	<h1>Health Recorder Profile</h1>
	<table>
        <tr>
            <td>Profile Image:</td>
            <td></td>
        </tr>
        <tr>
            <td>Id:</td>
            <td>{{ $profiledata['id']  }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $profiledata['name']  }}</td>
        </tr>
        <tr>
            <td>National Id:</td>
            <td>{{ $profiledata['a_nid']  }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $profiledata['email']  }}</td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>{{ $profiledata['password']  }}</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>{{ $profiledata['type']  }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $profiledata['phone']  }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $profiledata['gender']  }}</td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>{{ $profiledata['blood_group']  }}</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>{{ $profiledata['dob']  }}</td>
        </tr>
    </table>
</body>
</html>