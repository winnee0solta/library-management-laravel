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
                        <form action="/dashboard/add-new-book" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h3 class="mb-4">
                                Add New Book
                            </h3>

                            <div class="form-group">
                                <label >Book Image</label><br>
                                <input name="book-image" type="file"   class="form-control" required style="border:none">
                            </div>

                            <div class="form-group">
                                <input name="book-name" required type="text" class="form-control" placeholder="Book Name">
                            </div>
                            <div class="form-group">
                                <input name="book-author" required type="text" class="form-control" placeholder="Book Author">
                            </div>

                            <div class="form-group">
                                <input name="book-desc" required type="text" class="form-control"
                                placeholder="Book Description">
                            </div>
                            <div class="form-group">
                                <select name="book-category" class="form-control" >
                                    <option value="0" selected>None</option>
                                    @foreach ($categorys as $item)
                                        <option value="{{$item['id']}}">{{$item['category_name']}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input name="book-count" required type="number" class="form-control" placeholder="Book Count">
                            </div>
                            <div class="form-group">
                                <input name="book-shelve-no" required type="text" class="form-control"
                                    placeholder="Book Shelve no">
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <button type="submit" class="btn btn_submit">Add Book</button>
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
