<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Login | Shinakamana</title>
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    @if(session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
      <h2 class="mb-3 display-4">Shinakamana</h2>
      <h3 class="h3 mb-3 fw-normal text-center">Login</h3>

      <form action="/login" method="post">
        @csrf
      <div class="form-floating">
        <input type="username" name="username" class="form-control border-0 @error('username') is-invalid @enderror" id="username" placeholder="Username" required>
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control border-0" id="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>

      <button class="w-100 btn btn-lg" type="submit"><a href="/register"></a>Login</button>
      <p class="mt-3">Not Registered? <a href="/register" class="text-decoration-none" id="register">Register Now!</a></p>
    </form>
  </main>
</body>
</html>
