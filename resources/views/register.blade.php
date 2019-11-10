
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Create Account | Register</title>
    <!-- styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />

  </head>

  <body class="text-center" style="background-image:url('{{asset('images/login_bg.jpg')}}'); background-repeat: no-repeat; background-position: center; background-repeat: no-repeat; background-size: cover;">

        <form  class="form-signin" action="/register" method="post">
                          {{ csrf_field() }}
      <h1 class="mt-2 mb-3">LIBRARY</h1>

      <label class="sr-only">Name</label>
      <input type="text" name="name"  class="form-control" placeholder="Name" required
      >
      <label class="sr-only">Phone Number</label>
      <input type="text" name="phone"  class="form-control" placeholder="Phone Number" required
      >

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required
      >

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
 @if ($errors->any())
                           <div class="alert alert-danger" role="alert">
                               @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                               @endforeach
                           </div>
                           @endif
      <button class="btn btn-md btn-block" type="submit" style="background:red;color:white;">Sign Up</button>
      <p class="mt-3 mb-3 text-muted">Already have account ? <a href="/login">Signin</a></p>
    </form>
  </body>
</html>
