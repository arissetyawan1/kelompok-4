<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../foto/logo.png" alt="" width="50" height="50" class="me-2">
            MASeKO
          </a>
        <button class="navbar-toggler my-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Market</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Forum
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Diskusi</a></li>
                <li><a class="dropdown-item" href="#">Isu</a></li>
                <li><a class="dropdown-item" href="#">Sedulur</a></li>
              </ul>
            </li>
          @if (Auth::check() == true)
          <li class="nav-item">
              <form method="POST" action="{{route('logout')}}">
                    @csrf
                <button type="submit" class="btn btn-sm btn-danger">Logout</a>
              </form>
          </li>

          @else
          <li class="nav-item">
              <button type="button" class="btn position-relative btn-primary ms-2">
                <a href="{{ route('login') }}" class="login">Login</a>
              </button>
            </li>
          <li class="nav-item" style="margin-left: -20px;">
            <a class="nav-link" href="{{route('register')}}" tabindex="-1" aria-disabled="true">Sign Up</a>
          </li>
          @endif
          </ul>
          </div>
        </div>
      </nav>
<!-- Akhir Navbar -->
