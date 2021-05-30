<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary"">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard.index') }}"">Home</a>
        </li>
        @if(session('type') == "01" )
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard.treatments') }}">Treatments</a>
        </li>

        <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Reports</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="#"> Blood Reports &raquo; </a>
          <ul class="submenu dropdown-menu">
            <li><a class ="dropdown-item" href="{{route('hemoglobin.reports')}}">Hemoglobin(Hg)</a></li>
            <li><a class ="dropdown-item"  href="{{route('cholesterol.reports')}}">Cholesterol</a></li>
            <li><a class ="dropdown-item"  href="{{route('platelets.reports')}}">Platelets</a></li>
            <li><a class ="dropdown-item"  href="{{route('bloodsugar.reports')}}">Blood Sugar</a></li>
          </ul>
        </li>
         <li><a class ="dropdown-item"  href="{{route('urine.reports')}}">Urine Test</a></li>
        <li><a class ="dropdown-item"  href="{{route('creatinine.reports')}}">Creatinine</a></li>
        <li><a  class ="dropdown-item" href="{{route('xray.reports')}}">X-ray</a></li>
        <li><a  class ="dropdown-item" href="{{route('ultrasonography.reports')}}">Ultrasonography<li>
        <a  class ="dropdown-item" href="{{route('ct_scan.reports')}}">CT-scan</a></li>
        <li><a  class ="dropdown-item" href="{{route('ecg.reports')}}">ECG</a></li></a></li>
      </ul>
    </li>
        @endif
        @if(session('type') == "10")
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('treatment.verify') }}">Treatment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reports</a>
        </li>
        <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search patient" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        @endif
        @if(session('type') == "20" )

        <li class="nav-item">
          <a class="nav-link" href="{{ route('profile.recorder.index') }}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('hemoglobin.reports.create') }}">Add Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('hemoglobin.reports.all') }}">Reports</a>
        </li>
        @endif


      </ul>
      <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search patient" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>

    <ul class="navbar-nav">
     <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('logout') }}">Logout</a>
        </li>
    </div>
  </ul>
  </div>
</nav>



 <!-- <div class="topnav">
  <a class="active" style="color:#EAEDED;" class="navbar-brand"  href="#">E-health System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  <a class="" href="{{route('frontend.pages.index')}}">Home</a>
  
  @if(session('type') == "01" )
  <a href="#news">Profile</a>
  <a href="{{ route('dashboard.treatments') }}">Treatments</a>
  






  @endif



  




  <div class="topnav-right">
    <a href="{{ route('logout') }}">Logout</a>
  </div>
</div> -->