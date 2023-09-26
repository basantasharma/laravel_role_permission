<nav class="app-header navbar navbar-expand bg-body">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a></li>
        <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Offers</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
    </ul>
    <!--end::Start Navbar Links-->
    <ul class="navbar-nav">
      @auth
      <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Profile</a></li>
      <li class="nav-item d-none d-md-block"><a href="/logout/" class="nav-link">Log Out</a></li>
      @else
      <li class="nav-item d-none d-md-block"><a href="/login/" class="nav-link">Log in</a></li>
      @endauth
  </ul>
    
  </div><!--end::Container-->
</nav><!--end::Header-->











{{-- <nav class="navbar navbar-expand-lg sticky-top navbar-light " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      Home
    
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f2fd;">
            <li><a class="dropdown-item" href="#">Company</a></li>
            <li><a class="dropdown-item" href="#">Teams</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Contact us</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            What's On
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f2fd;">
            <li><a class="dropdown-item" href="#">Events</a></li>
            <li><a class="dropdown-item" href="#">Promos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Attractions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f2fd;">
            <li><a class="dropdown-item" href="#">Venues</a></li>
            <li><a class="dropdown-item" href="#">Paragliding</a></li>
            <li><a class="dropdown-item" href="#">Boating</a></li>
            <li><a class="dropdown-item" href="#">Mountain Climbing</a></li>
          </ul>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f2fd;">
            <li><a class="dropdown-item" href="#">Venues</a></li>
            <li><a class="dropdown-item" href="#">Paragliding</a></li>
            <li><a class="dropdown-item" href="#">Boating</a></li>
            <li><a class="dropdown-item" href="#">Mountain Climbing</a></li>
            <li><a class="dropdown-item" href="/adduser">Add User</a></li>
          </ul>
        </li>
        @endauth
      </ul>
      @auth

      <a href="/logout" class="btn btn-outline-primary mx-2">Logout</a>
      @else
        <a href="/login" class="btn btn-outline-primary mx-2">Login</a>
      
      @endauth
    </div>
  </div>
</nav> --}}