@include('incluide.header')
    <body class="antialiased">
    <header class="container"><!--header-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="logo" src="{{ url('img/jabo logo 3.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link navBtn" aria-current="page" href="{{ route('home')}}">Home</a>
        <a class="nav-link navBtn" aria-current="page" href="#services">Service</a>
        <a class="nav-link navBtn"  href="#review">Review</a>
        <a class="nav-link navBtn" href="#">Contact Us</a>
      </div>
    </div>
  </div>
</nav>
	</header>
    <div class="main">
    @yield('content')
    </div>
    <!-- footer -->
      <div class="footer container mt-5">
  <div class="row">
  <div class="col-md-6 mx-auto text-center">
          <h5>Contact Us</h5>
          <p>Email: jabo.durey@gmail.com</p>
          <p>Mobile: 01788588258</p>
        </div>
  </div>
      </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
