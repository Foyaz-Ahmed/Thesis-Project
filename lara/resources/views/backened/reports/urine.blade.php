@extends('backened.layouts.main')

@section('title')
    Urine Test
@endsection

@section('content')
    <h1 align="Center">Previous Urine Test</h1>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Result Value</th>
      <th scope="col">Reference Range</th>
      <th scope="col">Test Date</th>
  </tr>
  <tbody>
       @foreach($urine as $value)
        <tr>
            <td>{{$value['result_value']}}</td>
            <td>{{$value['reference_range']}}</td>
            <td>{{$value['date']}}</td>
        </tr>
        @endforeach
    
  </tbody>
</table>
@endsection

