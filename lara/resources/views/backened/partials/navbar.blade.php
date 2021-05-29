<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary"">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
      </ul>
      <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
