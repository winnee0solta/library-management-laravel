<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library | Admin Dashboard</title>
    <!-- styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/dashboard/app.css')}}" />

</head>

<body>
    <div id="main-wrapper">

        <!-- navigation bar -->
        @include('dashboard.partials.nav')
        <!-- navigation bar ends -->

            <!-- form -->
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-3">
                    <div class="custom-form">
                        <form action="/dashboard/add-new-admin-user" method="post" >
                            {{ csrf_field() }}
                            <h3 class="mb-4">
                                Add New Admin User
                            </h3>
                            <div class="form-group">
                                <input name="name" required type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input name="phone" required type="text" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input name="email"  required type="email" class="form-control" placeholder="Email address"  >
                            </div>
                            <div class="form-group">
                                <input name="password"  required type="password" class="form-control" placeholder="Password" >
                            </div>



                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <button type="submit" class="btn btn_submit">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- form ends  -->


    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src=" {{asset('js/dashboard/app.js')}}"></script>
</body>

</html>
