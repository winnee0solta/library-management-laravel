{{-- slogan --}}
<div class="text-center h4 text-white bg-dark mb-0 pt-2 pb-2">
    “Explore Today, Discover Tomorrow.”
</div>
{{-- nav  --}}
<nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
  <a class="navbar-brand" href="#">
       <img class="img-fluid" src="{{asset('/images/logo.jpg')}}" >
  </a>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link mr-sm-4" href="/">Home</a>
      </li>&nbsp; &nbsp;
      <li class="nav-item">
        <a class="nav-link mr-sm-4" href="/about-us">About Us</a>
      </li>&nbsp; &nbsp;
      <li class="nav-item">
        <a class="nav-link mr-sm-4" href="/contact-us">Contact Us</a>
      </li>&nbsp; &nbsp;
      <li class="nav-item">
        <a class="nav-link mr-sm-4" href="/faq">FAQ</a>
      </li>&nbsp; &nbsp;
      <li class="nav-item">
        <a class="nav-link mr-sm-4" href="/terms-and-condition">Terms & Conditions</a>
      </li>&nbsp; &nbsp;
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto" action="/search" method="GET">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search Book" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0 mr-sm-4" type="submit">Search</button>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link btn btn-secondary my-2 my-sm-0" href="/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="text-center display-4 font-weight-light  bg-white pl-5 pt-4 pb-4">
    Library Of Kathmandu
</div>
