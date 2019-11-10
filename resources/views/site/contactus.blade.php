<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    <!-- styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/site/app.css')}}" />
</head>

<body>
    <div id="main-wrapper">

        <!-- navigation bar -->
            @include('site.partials.nav')
        <!-- navigation bar ends -->

            <div class="row justify-content-center ">
                <div class="col-md-6 col-10 card mt-5 mb-5 pt-3 ">
                    <div >
                        <img class="img-fluid" src="{{asset('/images/logo.jpg')}}" style="height: 300px;display:block;margin:0 auto;">
                    </div>
                    <form class="h4" action="/contact-us" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label  >Name </label>
                        <input name="name" type="text" class="form-control"  placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label >Email </label>
                        <input name="email" type="email" class="form-control"  placeholder="name@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message / Suggest Books</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn red-btn">Submit</button>
                    </form>
                </div>
            </div>


    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src=" {{asset('js/site/app.js')}}"></script>
</body>

</html>
