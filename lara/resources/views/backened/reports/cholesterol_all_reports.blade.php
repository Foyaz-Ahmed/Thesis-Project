@extends('backened.layouts.main')

@section('title')
    Cholesterol Test
@endsection

@section('content')
    <h1 align="center">Previous Choleterol Test</h1>
    <div class="table_margin_hg">
    <center>
        <a class="btn btn-success "href="{{route('cholesterol.reports.create')}}">Inser New</a>
    </center>
    <br><br>
    <table class="table table-striped ">
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
                <a class="btn btn-primary "href="{{ route('cholesterol.reports.edit',[$value['id'], $value['date']]) }}">Update</a>
                <a class="btn btn-danger "href="{{ route('cholesterol.reports.delete',[$value['id'], $value['date']]) }}">Delete</a>    
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection