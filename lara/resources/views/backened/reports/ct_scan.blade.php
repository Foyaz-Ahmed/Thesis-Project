<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CT-Scan Details</title>
</head>
<body>
@foreach($ct_scan as $value)
    <h1>CT-Scan Reports</h1>
    <table>
        <tr>
            <td><img src="{{ asset('images/ct-scan') }}/{{ $value['image'] }}" alt="" width="50px"
            height="50px"></td>
            <td><a href="{{route('click.image.ct_scan', $value['date'])}}"> {{$value['date'] }}</a></td>
        </tr>
    </table> 
</body>
@endforeach
</html>