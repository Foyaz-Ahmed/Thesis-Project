<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <h1>Previous Urine Test</h1>
        <tr>
            <th>Result Value</th>
            <th>Reference Range</th>
            <th>Test Date</th>
        </tr>
        @foreach($urine as $value)
        <tr>
            <td>{{$value['result_value']}}</td>
            <td>{{$value['reference_range']}}</td>
            <td>{{$value['date']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>