@extends('backened.layouts.main')

@section('title')
    Xray-Test
@endsection

@section('content')



@foreach($xray as $value)
    <div class="margin_table">
    <table class="table table-striped">
        <thead class="">
            <th scope="row">Picture</th>
            <th scope="col">Test Date</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
        <tr>
            <td><img src="{{ asset('images/x-ray') }}/{{ $value['image'] }}" alt="" width="50px"
            height="50px"></td>
            <td><a href="{{route('click.image', $value['date'])}}"> {{$value['date'] }}</a></td>
            @if(session('p_id') == "" )
            <td><a class="btn btn-primary" href="{{route('click.image', $value['date'])}}">Click Here</a></td>
            @endif
            @if(session('p_id') != "" )
            <td><a class="btn btn-primary" href="{{route('click.image.show', $value['date'])}}">Click Here</a></td>
            @endif
        </tr>
        </tbody>
    </table>
    </div>  
</body>
@endforeach
@endsection



