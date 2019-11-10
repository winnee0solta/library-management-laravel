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
                            FAQ - Frequently Asked Question
                        </div>
                    <ul class="list-group card h4 p-2">
                        <li class="list-group-item p-4 list-group-item-warning">Do I need to register to use the Library?</li>
                        <li class="list-group-item p-4">Yes u need to register to become the member of the library and to use the library and for registration u need to fill the signup form of the system. </li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">How can I find book in Library of Kathmandu?</li>
                        <li class="list-group-item p-4"> Category of books are provided, or you can also search the book which you are looking for.  </li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">Can I reserve the books?</li>
                        <li class="list-group-item p-4">Yes u can and within two days of reservation you have to collect the book.  </li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">How do I Get help?</li>
                        <li class="list-group-item p-4">You can contact us through the contact us page, come to the library or calling us during the open hours.  </li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">Does the library have Book Study rooms?</li>
                        <li class="list-group-item p-4"> The library has bookable study rooms for individuals or groups of varying sizes. You can book by contacting to the librarian</li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">Can I suggest book of my desire?</li>
                        <li class="list-group-item p-4"> Yes you can, there is a suggestion form where you can suggest the books of your wish. </li>
                    </ul>
                    <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning">How do I manage a large research project?</li>
                        <li class="list-group-item p-4">Talk to a librarian to get advice on managing research projects and using citation management tools.  </li>
                    </ul>

                    {{-- <ul class="list-group card h4 p-2 mt-3">
                        <li class="list-group-item p-4 list-group-item-warning"></li>
                        <li class="list-group-item p-4"> </li>
                    </ul> --}}

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
