<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/register.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Register | Shinakamana</title>
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
      @csrf
      <h2 class="mb-3 display-4">Shinakamana</h2>
      <h3 class="h3 mb-3 fw-normal text-center">Registration Form</h3>
      <div class="form-floating">
        <input type="text" name="username" class="form-control border-0 @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" id="email" class="form-control border-0 @error('email')is-invalid @enderror" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control border-0" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>

      <button class="w-100 btn btn-lg mt-2" type="submit">Register</button>
      <p class="mt-3">Already Registered? <a href="/login" class="text-decoration-none" id="login">Login Now!</a></p>
    </form>
  </main>
</body>
</html>
