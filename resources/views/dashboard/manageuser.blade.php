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

        <a href="/dashboard/add-new-admin-user" class="btn add_new_book_btn">Add New User</a>

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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($users))
                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($users as $data)
                                    <tr>
                                        <th scope="row">#{{$count}}</th>
                                        <td>{{$data['name']}}</td>
                                        <td>{{$data['email']}}</td>
                                        <td>{{$data['phone']}}</td>
                                         <td>
                                        {{-- <a href="/dashboard/edit-book/{{$data['id']}}" class="btn view_btn">Edit</a> --}}
                                        <a href="/dashboard/remove-user/{{$data['id']}}" class="btn remove_btn">Remove</a>
                                    </td>
                                    </tr>
                                     @php
                                        $count++;
                                    @endphp
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
