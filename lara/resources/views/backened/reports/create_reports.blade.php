<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports Page</title>
</head>
<body>
    <ul>
        <li><a>Blood Reports</a>
            <ul>
            <li><a href="{{route('hemoglobin.reports.create')}}">Hemoglobin(Hg)</a></li>
            <li><a href="{{route('creatinine.reports.create')}}">Creatinine</a></li>
            <li><a href="{{route('cholesterol.reports.create')}}">Cholesterol</a></li>
            <li><a href="{{route('platelets.reports.create')}}">Platelets</a></li>
            <li><a href="{{route('bloodsugar.reports.create')}}">Blood Sugar</a></li>
            <li><a href="{{route('urine.reports.create')}}">Urine Test</a></li>
            </ul>
        </li>
        <li><a>Other Reports</a>
            <ul>
            <li><a href="{{route('xray.reports.create')}}">X-ray</a></li>
            <li><a href="{{route('ultrasonography.reports.create')}}">Ultrasonography<li>
            <a href="{{route('ct_scan.reports.create')}}">CT-scan</a></li>
            <li><a href="{{route('ecg.reports.create')}}">ECG</a></li></a></li>
            </ul>
        </li>
    </ul>
</body>
</html>