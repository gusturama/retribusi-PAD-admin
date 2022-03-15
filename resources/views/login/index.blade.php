<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login Admin Retribusi PAD</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/dist/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="card">
      <div class="card-body">
        <form class="form-signin" action="/login" method="POST">
          @csrf
          <img class="mb-4" src="img/logo.jpeg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Admin Retribusi PAD</h1>

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          

          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
        <p class="text-muted">&copy; {{ date('Y') }}</p>
      </div>
    </div>
    <script src="/dist/js/bootstrap.min.js"></script>
  </body>
</html>
