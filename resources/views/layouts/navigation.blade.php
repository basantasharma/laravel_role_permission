<nav class="navbar navbar-expand-lg sticky-top navbar-light " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
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
            {{-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
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
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
      </ul>
      @auth

      {{-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
      <a href="/logout" class="btn btn-outline-primary mx-2">Logout</a>
      @else
        <a href="/login" class="btn btn-outline-primary mx-2">Login</a>
      
      @endauth
    </div>
  </div>
</nav>