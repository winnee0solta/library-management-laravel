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
                <div class="col-8  mt-5 mb-5 pt-3 ">
                        <div class="text-center h1 mb-4">
                            Library Terms and Conditions
                        </div>
                        <div class="card p-4">
                            <div class="h3 mb-4">
                                General Condition
                            </div>
                            <ul class="h5">
                                <li>
                                    All visitors must be the member of the library to use the library resources.
                                </li>
                                <li>
                                    All users of the Library are required to sign in and out on arrival and departure
                                </li>
                                <li>
                                    Bags must be deposited in the cupboard provided
                                </li>
                                <li>
                                    Mobile phones and personal music players may not be used in the Library
                                </li>
                                <li>Conversation should be kept to a minimum to avoid disturbing other users </li>
                                <li>Smoking, eating and drinking are not permitted</li>
                            </ul>
                        </div>
                        <div class="card p-4 mt-4">
                            <div class="h3 mb-4">
                               Borrowing and Renewals Conditions
                            </div>
                            <ul class="h5">
                               <li>Members of the library may borrow the items for 10 days. </li>
                               <li>Once an item has reached its renewal limit, it must be returned to the Library and may not be borrowed again by the same user until it has been back in the Library and available to other users for at least one week.</li>
                               <li>It is the borrower's responsibility to ensure that items are returned to the Library on time</li>
                               <li>Borrowed items must be returned or renewed by 5:00pm on the due date.</li>
                            </ul>
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
