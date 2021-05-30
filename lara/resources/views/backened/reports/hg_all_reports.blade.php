@extends('backened.layouts.main')

@section('title')
    Tratments Details
@endsection

@section('content')
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

@endsection
