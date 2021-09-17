    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b7f7d4;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../foto/logo.png" alt="" width="50" height="50" class="me-2">
          MASeKO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Cari Barang" aria-label="Search">
            <button class="btn" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notifikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bantuan</a>
            </li>
            @if (Auth::check() == true)
            <li class="nav-item">
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Logout</a>
                </form>

            </li>
            @else
                <li class="nav-link">
                    <a href="{{ route('login') }}" class="nav-link btn btn-md btn-primary mx-2">Login</a>
                </li>
                <li class="nav-link" style="margin-left: -20px;">
                    <a class="nav-link btn btn-outline-primary" href="{{route('register')}}" tabindex="-1" aria-disabled="true">Sign Up</a>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
