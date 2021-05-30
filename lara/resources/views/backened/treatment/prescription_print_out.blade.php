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
    <tr>
        <th>Dr. Name<th>
        <th>Medicine Details<th>
        <th>Disease Details<th>
        <th>Remarks<th>
        <th>Date<th>
        <th>Action<th>
    </tr>
    @foreach($treatment as $value)
    <tr>
        <td>{{ $value['d_name']}}<td>
        <td>{{ $value['medicine_details'] }}<td>
        <td>{{ $value['disease_details'] }}<td>
        <td>{{ $value['remarks'] }}<td>
        <td><a  href="#">{{ $value['date'] }}</a><td>
        <td><a href="{{ route('treatment.pdf', $value['date']) }}">Download Details<a></td>
    </tr>
    @endforeach
 </table>
 <br><br><br>
  @if(session('type')==10)
    <a href="{{route('treatment.create')}}"><button>Add Treatment</button></a>
 
   @endif
</body>
</html>

 


