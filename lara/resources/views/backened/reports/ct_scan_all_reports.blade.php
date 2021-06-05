@extends('backened.layouts.main')

@section('title')
    ct-scan reports 
@endsection

@section('content')
    <h1 align="center">All CT-Scan Test</h1>
    <div class="table_margin_hg">
    <center>
    <a class="btn btn-success "href="{{route('ct_scan.reports.create')}}">Inser New</a>
	</center>
    @include('backened.partials.message')
	<br><br>
    <table class="table table-striped ">
        <tr>
            <th>Patient Id</th>
            <th>Image</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($all as $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td><img src="{{ asset('images/ct-scan') }}/{{ $value['image'] }}" alt="" width="50px"
            height="50px">
			</td>
            <td>{{$value['date']}}</td>
            <td>
                <a class="btn btn-danger "href="#">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection