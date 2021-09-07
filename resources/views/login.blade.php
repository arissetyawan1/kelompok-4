<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=" ../css/login.css">
    <link rel="stylesheet" type="text/css" href="../awesome/css/all.min.css">
    <title>Login-MASeKO</title>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container">
        <form class="form-container">
            <h2 class="mb-4 textHead" style="margin-left: 155px;">Login</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label textForm">Username/E-mail address</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter your username or e-mail">
                </div>
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label textForm">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter you password">
                </div>
            </div>
            <div id="emailHelp" class="mb-4 form-text">Hide your passwor from others</div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label textForm" for="exampleCheck1">Remind me</label>
                <div style="margin-top: -25px" class="text-end">
                    <a href="#" class="textForm text-hover">forgot password?</a>
                </div>
            </div>
            <div class="d-grid">
                <a href="home.html"></a>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div style="margin-left: 80px; margin-top: 15px">
                <span class="textForm">Don't have an account yet?<a href="register.html"
                        class="textForm text-hover"> Sign Up</a></span>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>
