@extends('welcome')
@section('content')
 <div class="container">
 <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height:500px;" src="{{ url('sliderImg/Header-1.jpg') }}" class="d-block w-100 mt-4" alt="...">
      <div class="carousel-caption d-md-block">
      <a href="https://play.google.com/store/apps/details?id=com.parkingkoi.jabo&hl=en&gl=US" class="btn btn-danger">Download App</a>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:500px;"  src="{{ url('sliderImg/Header-2.jpg') }}" class="d-block w-100 mt-4" alt="...">
      <div class="carousel-caption d-md-block">
      <a href="https://play.google.com/store/apps/details?id=com.parkingkoi.jabo&hl=en&gl=US" class="btn btn-danger">Download App</a>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height:500px;"  src="{{ url('sliderImg/Header-3.jpg') }}" class="d-block w-100 mt-4" alt="...">
      <div class="carousel-caption d-md-block">
      <a href="https://play.google.com/store/apps/details?id=com.parkingkoi.jabo&hl=en&gl=US" class="btn btn-danger">Download App</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>
 <!-- SERVICE AREA -->
 <div id="services" class="service-area container">
     <h2 class="text-success text-center my-3">Our services</h2>
     <div class="row">
        <div class="col-sm-4 mt-1">
            <div class="card myCart">
            <div class="card-body">
                <h3 class="card-title">Available Route</h3>
                <p class="card-text">We have our own routes.</p>
           
            </div>
            </div>
        </div>
        <div class="col-sm-4 mt-1">
            <div class="card myCart">
            <div class="card-body">
                <h3 class="card-title">Pick & Drop</h3>
                <p class="card-text">You can also have any kind of Pick & Drop service from us.</p>
     
            </div>
            </div>
        </div>
        <div class="col-sm-4 mt-1">
            <div class="card myCart">
            <div class="card-body">
                <h3 class="card-title">Rental Service</h3>
                <p class="card-text">You can also rent a car at a low price.</p>
     
            </div>
            </div>
        </div>
        </div>
 </div>
 <!-- OUR ROAD AREA -->
 <!-- <div class="our-road container">
  <h2 class="text-success text-center my-3">Our Road</h2>
  <img class="road" src="{{ url('road/road.jpg') }}" alt="">
 </div> -->
  <!-- OUR RIVIEW AREA -->
  <div id="review" class="review container">
  <h2 class="text-success text-center my-3">Review</h2>
  <div class="row">
    <!-- <div class="col-md-4">
      <h4>Md example</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, nisi nulla itaque officia commodi totam dicta aperiam? Quam, dolor ex.</p>
    </div>
    <div class="col-md-4">
    <h4>Md example</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, nisi nulla itaque officia commodi totam dicta aperiam? Quam, dolor ex.</p>
    </div>
    <div class="col-md-4">
    <h4>Mdexample</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, nisi nulla itaque officia commodi totam dicta aperiam? Quam, dolor ex.</p>
    </div> -->
  </div>
  </div>
@endsection
