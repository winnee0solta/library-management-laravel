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
                <div class="col-8 card mt-5 mb-5 pt-3 ">
                    <div >
                        <img class="img-fluid" src="{{asset('/images/logo.jpg')}}" style="height: 300px;display:block;margin:0 auto;">
                    </div>
                    <p class="h4 p-3 text-justify" >
                        Search for blood' is a web based application developed for community welfare initiative which will alow the user to search the contact details of a person with the various blood groups along with the different emergency contacts at the time of crisis. 'Blood' is recognized as the most precious clement that sustains life. It saves innumerablc lives across the world in a varicty of conditions. Once in every 2seconds, someone, somewhere is desperately in need of blood where Search For Blood roles comes to help the people Have you ever witnessed a situation where someone close to you needs a blood and the blood banks are out of stock? Where you need a blood donor and you aint able to find one and the clock keeps ticking? Have you ever heard or witnessed the demise of somebody just
because they didn't get the donor at the most needed hour?? Isnt there anything that as a human being, society can do??Blood Banks, SEARCH FOR BLOOD
just like money banks, need deposits to prowide withdrawals. When a person in need of blood approaches a blood bank, the blood bank provides it, yet the blood given needs to be replenished and hence requests the seeker to get donors (relatives or friends) for the same,
the incentive being subsidization of the cost per unit of blood or release of more units. During such an individual crisis, getting donors is seldom easy. Searchforblood.com comes to the aid of individuals in such a situation. This thought gave the birth to our aim that is Search For Blood' Scarch For Blood brings the blood donors on one place where you can find the donors at just the click of button when you are in most need of it. In case of social Emergencies the demand for blood far exceeds the amount of blood in blood banks when communications and transit become difficult Searchforblood helps to find donors

                    </p>
                </div>
            </div>

  <!-- footer bar -->
            @include('site.partials.footer')
        <!-- footer bar ends -->
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
