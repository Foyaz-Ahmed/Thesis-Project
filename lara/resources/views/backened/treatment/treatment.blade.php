@extends('backened.layouts.main')

@section('title')
    Tratments Details
@endsection

@section('content')

 <div class="table-responsive">
  <table class="table">
    <tr>
        <th>Dr. Name<th>
        <th>Medicine Details<th>
        <th>Disease Details<th>
        <th>Remarks<th>
        <th>Date<th>
        <th>Action<th>
    </tr>
    @foreach($treat as $value)
    <tr>
        <td>{{ $value['d_name']}}<td>
        <td>{{ $value['medicine_details'] }}<td>
        <td>{{ $value['disease_details'] }}<td>
        <td>{{ $value['remarks'] }}<td>
        <td><a  href="#">{{ $value['date'] }}</a><td>
        @if(session('type')== 01 )
        <td><a class="btn btn-primary" href="{{ route('treatment.pdf', $value['date']) }}">Download<a></td>
        @endif
        @if(session('type') == 10 )
        <td><a class="btn btn-primary" href="{{ route('treatment.doctor.pdf', $value['date']) }}">Download<a></td>
        @endif
    </tr>
    @endforeach
 </table>
</div>
 <br><br><br>
  @if(session('type')==10)
    <a class="btn btn-success margin_addbutton" href="{{route('treatment.create')}}">Add Treatment</a>
 
   @endif

@endsection
 


