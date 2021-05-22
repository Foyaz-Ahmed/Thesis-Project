<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
@foreach($profiledata as $value)
    <h1><h1>

    <h1>Profile of Patients</h1>
    <table>
        <tr>
            <td>Profile Image:</td>
            <td><img src="{{ asset('images/profile_upload') }}/{{ $value['p_image'] }}" alt="" width="100px"
            height="100px"></td>
        </tr>
        <tr>
            <td>Id:</td>
            <td>{{ $value['id']  }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $value['p_name']  }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $value['email']  }}</td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>{{ $value['password']  }}</td>
        </tr>
        <tr>
            <td>Age:</td>
            <td>{{ $value['age']  }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $value['phone']  }}</td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>{{ $value['blood_group']  }}</td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>{{ $value['address']  }}</td>
        </tr>
        <tr>
            <td>Emergency Contact:</td>
            <td>{{ $value['e_contact']  }}</td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td>{{ $value['dob']  }}</td>
        </tr>
    </table>
@endforeach
</body>
</html>