<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x-ray image</title>
</head>
<body>
@foreach($view as $value)
    <td><img src="{{ asset('images/x-ray') }}/{{ $value['image'] }}" alt="" width="100%"></td>
@endforeach
</body>
</html>
