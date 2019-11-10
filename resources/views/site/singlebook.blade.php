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
        <div class="container card mt-5 mb-5 pt-3">
         <div class="row  justify-content-center p-3">
             <div class="col-md-4 ">
                 <img class="img-fluid" src="{{asset('/images/books/'.$book['book_image'])}}" style="height: 300px;display: block;margin:0 auto;">
             </div>
                <div class="col-8  mt-2 mb-2 p-3 ">

                    <div class="h3">
                        Name : {{$book['book_name']}}
                    </div>
                    <div class="h3">
                        Author : {{$book['book_author']}}
                    </div>
                    <div class="h3">
                        Shelve No : {{$book['book_shelves_no']}}
                    </div>
                    <p class="h4 pt-2 text-justify">
                        {{$book['book_desc']}}
                    </p>
                    <div class="mt-3">
                        @if ($outofstock)
                            <a href="#" class="btn   mt-2 btn-dark disabled" >Book Out Of Stock</a>
                        @elseif($needtoreturn != 'no')
                    <a href="#" class="btn   mt-2 btn-dark disabled" >Need To Be Return In {{$needtoreturn}}</a>
                        @elseif($isreserved)
                        <a href="#" class="btn green-btn mt-2 disabled">Book Reserved</a>
                        <a href="/cancel-reserve-book/{{$book['id']}}/{{$book['book_name']}}" class="btn red-btn mt-2">Cancel Reservation</a>

                        @else
                        <a href="/reserve-book/{{$book['id']}}/{{$book['book_name']}}" class="btn red-btn mt-2">Reserve Book</a>
                        @endif

                    </div>
                </div>
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
