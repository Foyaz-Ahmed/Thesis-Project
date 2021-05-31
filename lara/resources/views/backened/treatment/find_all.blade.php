@extends('backened.layouts.main')


@section('title')
    Dashboard Of user
@endsection

@section('content')
 @include('backened.partials.message')
 <div class="margin_body">
   <a href="{{route('verify.treatments',$id)}}"class="btn  btn-success">Prescriptions</a>
   <br><br>
   <ul class="navbar-nav">
    <li class="nav-item dropdown" id="myDropdown">
   <a  class=" size_button btn btn-warning nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Reports</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="#"> Blood Reports &raquo; </a>
          <ul class="submenu dropdown-menu">
            <li><a class ="dropdown-item" href="{{route('hemoglobin.reports.show')}}">Hemoglobin(Hg)</a></li>
            <li><a class ="dropdown-item"  href="{{route('cholesterol.reports.show')}}">Cholesterol</a></li>
            <li><a class ="dropdown-item"  href="{{route('platelets.reports.show')}}">Platelets</a></li>
            <li><a class ="dropdown-item"  href="{{route('bloodsugar.reports.show')}}">Blood Sugar</a></li>
          </ul>
        </li>
         <li><a class ="dropdown-item"  href="{{route('urine.reports.show')}}">Urine Test</a></li>
        <li><a class ="dropdown-item"  href="{{route('creatinine.reports.show')}}">Creatinine</a></li>
        <li><a  class ="dropdown-item" href="{{route('xray.reports.show')}}">X-ray</a></li>
        <li><a  class ="dropdown-item" href="{{route('ultrasonography.reports.show')}}">Ultrasonography<li>
        <a  class ="dropdown-item" href="{{route('ct_scan.reports.show')}}">CT-scan</a></li>
        <li><a  class ="dropdown-item" href="{{route('ecg.reports.show')}}">ECG</a></li></a></li>
      </ul>
  </li>
</ul>

 <div>
@endsection