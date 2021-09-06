<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="stylesheet" type="text/css" href="../awesome/css/all.min.css">
    <title>Register-MASeKO</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MASeKO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sedulur</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <form class="form-container">
        <h1 class="mt-2 mb-2">Registration</h1>
        <div class="row">
          <div class="col-md-7">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input your full name">
          </div>
          </div>
          <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input your e-mail">
          </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Input your password">
            <div id="emailHelp" class="form-text">We'll never share your password with anyone else</div>
          </div>
          </div>
          <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Reapet Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Reapet your password">
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Create your username">
          </div>
        </div>

        <div class="form-check" style="margin-left: 12px;">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label mb-4" for="exampleCheck1">I agree to all terms and conditions *</label>
        </div>

        <div>
          <div class="row">
            <div class="col-md-6 d-grid">
              <button type="submit" class="btn btn-primary"><a href="login.html">Sign Up</a></button>
            </div>
            <div class="col-md-6 d-grid">
              <button type="reset" class="btn btn-primary bg-color">Reset Data</button>
            </div>
          </div>
        </div>

        <div style="margin-left: 200px; margin-top: 15px">
          <span class="textForm">Already Have an Account?<a href="login.html" class="textForm text-hover"> Login</a></span>
        </div>      
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>