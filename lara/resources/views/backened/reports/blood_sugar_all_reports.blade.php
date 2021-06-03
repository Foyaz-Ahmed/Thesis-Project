@extends('backened.layouts.main')

@section('title')
    Blood Sugar reports
@endsection

@section('content')
    <h1 align="center">Previous Blood Sugar Test</h1>
    <div class="table_margin_hg">
    <center>
        <a class="btn btn-success "href="{{route('bloodsugar.reports.create')}}">Inser New</a>
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
                <a class="btn btn-primary "href="{{ route('bloodsugar.reports.edit',[$value['id'], $value['date']]) }}">Update</a>
                <a class="btn btn-danger "href="{{ route('bloodsugar.reports.delete',[$value['id'], $value['date']]) }}">Delete</a>
                
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection