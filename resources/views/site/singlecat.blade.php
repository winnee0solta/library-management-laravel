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

        {{-- categorys --}}
        <div class="category-holder mt-5 container">
            @if (!empty($name))
            <div class="h1">
                Category - {{$name}}
            </div>

            @endif
            <div class="row">
                <div class="col-md-3 mt-3">
                    @if (!empty($books))
                        @foreach ($books as $book)
                        <a href="/single-book/{{$book['id']}}/{{$book['book_name']}}">
                            <div class="single-cat card">
                            <div class="single-cat--img m-2" style="background: url('/images/books/{{$book['book_image']}}')">

                            </div>
                             <div class="single-cat--title  pb-1" style="text-transform: none;">
                                 {{ Illuminate\Support\Str::limit($book['book_name'], 20)  }}
                             </div>
                        </div>
                        </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        {{-- categorys ends --}}

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
