@extends('backened.layouts.main')

@section('title')
    CT-Scan Test
@endsection

@section('content')



@foreach($ct_scan as $value)
    <div class="margin_table">
    <table class="table table-striped">
        <thead class="">
            <th scope="row">Picture</th>
            <th scope="col">Test Date</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
        <tr>
            <td><img src="{{ asset('images/ct-scan') }}/{{ $value['image'] }}" alt="" width="50px"
            height="50px"></td>
            <td><a href="{{route('click.image.ct_scan', $value['date'])}}"> {{$value['date'] }}</a></td>
            <td><a class="btn btn-primary" href="{{route('click.image.ct_scan', $value['date'])}}">Click Here</a></td>
        </tr>
        </tbody>
    </table>
    </div>  
</body>
@endforeach
@endsection