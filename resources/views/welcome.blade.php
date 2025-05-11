@extends('layouts.app')

@section('content')
<!-- Hero Search -->
<div class="hero-section bg-primary py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center text-white">
                <h1 class="display-4 mb-4">Book Trusted Services Near You</h1>
                <div class="hero-search">
                    <form action="{{ route('services.search') }}" method="GET">
                        <div class="input-group input-group-lg shadow">
                            <input type="text" 
                                   class="form-control" 
                                   name="query"
                                   placeholder="What service are you looking for?">
                            <button class="btn btn-light" type="submit">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </div>
                        <div class="mt-3">
                            <input type="text" 
                                   class="form-control" 
                                   name="location"
                                   placeholder="Enter your location (e.g. Kolkata)">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Categories -->
<div class="container my-5">
    <h2 class="text-center mb-5">Popular Services in Kolkata</h2>
    <div class="row g-4">
        <!-- Beauty Service Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow service-card">
                <img src="{{ asset('images/beauty-service.jpeg') }}" class="card-img-top" alt="Beauty Service">
                <div class="card-body">
                    <h5 class="card-title">Beauty Services</h5>
                    <p class="card-text">
                        Salon at home | Bridal makeup | Hair care
                    </p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Service Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow service-card">
                <img src="{{ asset('images/home-service.jpeg') }}" class="card-img-top" alt="Home Service">
                <div class="card-body">
                    <h5 class="card-title">Home Services</h5>
                    <p class="card-text">
                        Cleaning | Repairs | Maintenance
                    </p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Native Service Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow service-card">
                <img src="{{ asset('images/hero-service.jpeg') }}" class="card-img-top" alt="Native Service">
                <div class="card-body">
                    <h5 class="card-title">Native Services</h5>
                    <p class="card-text">
                        Traditional crafts | Local experts | Cultural services
                    </p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection