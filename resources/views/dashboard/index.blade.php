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

        <a href="/dashboard/add-new-book" class="btn add_new_book_btn">Add New Book</a>
        <a href="/dashboard/manage-category" class="btn add_new_book_btn">Manage Category</a>

        <!-- show booklists -->
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="book-list-tabel-container">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Shelves no </th>
                                        <th scope="col">Total Book</th>
                                        <th scope="col">Reserved</th>
                                        <th scope="col">To Be Returned</th>
                                        <th scope="col">Added Date </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($datas))
                                    @foreach ($datas as $data)
                                    <tr>
                                        <th scope="row">#{{$data['sn']}}</th>
                                        <td>
                                            <img class="img-fluid" src="{{asset('/images/books/'.$data['book_image'])}}" style="max-height:100px;">
                                        </td>
                                        <td>{{$data['book_name']}}</td>
                                        <td>{{$data['category_name']}}</td>
                                        <td>{{$data['book_author']}}</td>
                                        <td>{{$data['book_shelvesno']}}</td>
                                        <td>{{$data['book_count']}}</td>
                                        <td>
                                            @if ($data['book_reserved'] == 0)
                                                {{$data['book_reserved']}}
                                            @else
                                            <a href="/dashboard/show-reservations-data/{{$data['id']}}">
                                            {{$data['book_reserved']}}
                                            </a>
                                            @endif

                                        </td>
                                        <td>
                                             @if ($data['book_taken'] == 0)
                                                {{$data['book_taken']}}
                                            @else
                                              <a href="/dashboard/show-taken-data/{{$data['id']}}">
                                            {{$data['book_taken']}}
                                            </a>
                                            @endif
                                        </td>
                                        <td>{{$data['added_date']}}</td>
                                         <td>
                                        <a href="/dashboard/edit-book/{{$data['id']}}" class="btn view_btn">Edit</a>
                                        <a href="/dashboard/remove-book/{{$data['id']}}" class="btn remove_btn">Remove</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- show booklists ends  -->


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
