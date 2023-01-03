<nav class="navbar navbar-expand-lg">
  <div class="container-fluid mx-4">
    <a class="navbar-brand" href="/">Shinakamana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
          {{-- @auth --}}
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Top Anime
            </a>
            <ul class="dropdown-menu border-0">
              <li><a class="dropdown-item" href="/animeongoing">Anime On Going</a></li>
              <li><a class="dropdown-item" href="/animeterbaik">Anime Terbaik</a></li>
              <li><a class="dropdown-item" href="/animeterpopuler">Anime Terpopuler</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="item" href="/musim">Musim Anime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="item" href="/jadwal">Jadwal Anime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="item" href="/genre">Genre Anime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="item" href="/about">About Us</a>
          </li>
          {{-- @else --}}
          <li class="nav-item">
            <a class="nav-link active" id="item" href="/login">Login</a>
          </li>
          {{-- @endauth --}}
        </ul>
        <form action="/search" class="d-flex mt-3 mt-lg-0" role="search">
          <input class="cari form-control me-2 border-0" type="search" placeholder="Search" id="search-input">
          <button class="btn-cari btn" type="submit" id="search-button"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</nav>
