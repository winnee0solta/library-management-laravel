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
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Reserved Date</th>
                                        <th scope="col">Return Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($datas))
                                    @php
                                        $count =1;
                                    @endphp
                                    @foreach ($datas as $data)
                                    <tr>
                                        <th scope="row">#{{$count}}</th>
                                        <td>{{$data['name']}}</td>
                                        <td>{{$data['phone']}}</td>
                                        <td>{{$data['email']}}</td>
                                        <td>{{$data['reserved_date']}}</td>
                                        <td>{{$data['return_date']}}</td>
                                         <td>
                                        <a href="/dashboard/mark-reservation-taken/{{$data['reservation_id']}}" class="btn view_btn">Mark As Taken</a>
                                        </td>
                                         <td>
                                        <a href="/dashboard/remove-reservation/{{$data['reservation_id']}}" class="btn remove_btn">Remove Reservation</a>
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
