<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Hg reports</title>
</head>
<body>
    <h1>Previous Hg Test</h1>
    <table>
        <tr>
            <th>Patient Id</th>
            <th>Result Value</th>
            <th>Reference Range</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($all as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['result_value']}}</td>
            <td>{{$value['reference_range']}}</td>
            <td>{{$value['date']}}</td>
            <td>
                <a href="{{ route('hemoglobin.reports.edit',[$value['id'], $value['date']]) }}"><button>Update</button></a>
                <a href="{{ route('hemoglobin.reports.delete', [$value['id'],$value['date'] ])}}"><button>Delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>