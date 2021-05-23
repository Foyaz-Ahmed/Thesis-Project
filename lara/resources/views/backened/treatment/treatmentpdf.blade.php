<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment Details</title>
</head>

<body>
<h1>Previous Treatment Record</h1>
 <table>
 @foreach($treat as $value)
    <tr>
        <th>Patient Id:</th>
        <td>{{session('name')}}</td>
        <th>Date:</th>
        <td><a>{{ $value['date'] }}</a></td>
    </tr>
    <tr>
        <th>Patient Name:</th>
        <td>{{$value['p_name']}}</td>
    </tr>
    <tr>
        <th>Age:</th>
        <td>{{$value['age']}}</td>
    </tr>
    <tr>
        <th>Dr. Name:</th>
        <td>{{ $value['d_name']}}</td>
    </tr> 
    <tr>
        <th>Disease Details:</th>
        <td>{{ $value['disease_details'] }}</td>
    </tr>
    <tr>
        <th>Medicine Details:</th>
        <td>{{ $value['medicine_details'] }}</td>
    </tr>
    <tr>
        <th>Remarks:</th>
        <td>{{ $value['remarks'] }}</td>
    @endforeach
 </table>

   
   
</body>
</html>