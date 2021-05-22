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
            <li><a href="{{route('hemoglobin.reports')}}">Hemoglobin(Hg)</a></li>
            <li><a href="{{route('creatinine.reports')}}">Creatinine</a></li>
            <li><a href="{{route('cholesterol.reports')}}">Cholesterol</a></li>
            <li><a href="{{route('platelets.reports')}}">Platelets</a></li>
            <li><a href="{{route('bloodsugar.reports')}}">Blood Sugar</a></li>
            <li><a href="{{route('urine.reports')}}">Urine Test</a></li>
            </ul>
        </li>
        <li><a>Other Reports</a>
            <ul>
            <li><a href="{{route('xray.reports')}}">X-ray</a></li>
            <li><a href="{{route('ultrasonography.reports')}}">Ultrasonography<li>
            <a href="{{route('ct_scan.reports')}}">CT-scan</a></li>
            <li><a href="{{route('ecg.reports')}}">ECG</a></li></a></li>
            </ul>
        </li>
    </ul>
</body>
</html>