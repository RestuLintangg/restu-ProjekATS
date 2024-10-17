<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wardah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<style>
  body, html {
    height: 100%; 
  }

  .navbar-brand {
    width: 60px;
    margin-left: 50px;
  }

  .content {
    flex: 1; 
  }

  .footer {
    background: #5f4949;
    color: #fff;
    text-align: center;
    padding: 10px 10px;
    height: auto;
    /* position: sticky;
    bottom: 0; 
    width: 100%; */
  }

  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="{{ asset('img/imagelogo.png') }}" class="navbar-brand" href="#"></img>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('landing') }}">About Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reviews.index') }}">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.index') }}">Data Pembelian</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content">
  @yield('main')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
@stack('script')

<footer class="footer">
  <div class="container">
      <p>&copy; 2024 All rights reserved.</p>
  </div>
</footer>

</body>
</html>
