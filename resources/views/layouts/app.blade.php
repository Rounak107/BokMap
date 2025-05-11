<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... keep existing meta tags ... -->
    <title>BookMap - Your Professional Service Platform</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <!-- Modern Navigation -->
    <!-- Replace navbar section -->
<nav class="navbar navbar-expand-lg" style="background-color: rgb(230, 231, 245); padding: 1rem 0;">
    <div class="container">
        <a class="navbar-brand" href="/" style="font-weight: 800; font-size: 1.5rem; color: #000;">
            BokMap
        </a>
        
        <!-- <div class="d-flex align-items-center flex-grow-1 mx-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search services..." id="serviceSearch">
                <button class="btn btn-primary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            
            <div class="input-group ms-2">
                <input type="text" class="form-control" placeholder="Enter location..." id="locationSearch">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-geo-alt"></i>
                </button>
            </div>
        </div> -->

        <ul class="navbar-nav">
            <li class="nav-item mx-2">
                <a class="nav-link" href="/beauty">Beauty</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/homes">Homes</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="/native">Native</a>
            </li>
        </ul>
    </div>
</nav>
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Professional Footer -->
    <footer class="footer mt-5 py-5" style="background-color: #cfe0f2;">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">BokMap</h5>
                <ul class="list-unstyled">
                    <li><a href="/about" class="text-dark text-decoration-none">About Us</a></li>
                    <li><a href="/blog" class="text-dark text-decoration-none">Blog</a></li>
                </ul>
            </div>

            <!-- Center Column -->
            <div class="col-md-4 text-center">
                <h5 class="fw-bold mb-3">Services</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="/beauty" class="text-dark text-decoration-none">Beauty</a></li>
                            <li><a href="/homes" class="text-dark text-decoration-none">Homes</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="/native" class="text-dark text-decoration-none">Native</a></li>
                            <li><a href="/all-services" class="text-dark text-decoration-none">All Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
                <div class="col-md-4 text-end">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <p class="mb-1">
                        Email: <a href="mailto:rajugroupinfo@gmail.com">rajugroupinfo@gmail.com</a>
                    </p>
                    <p class="mb-1">
                        Phone: <a href="tel:+916291030338">+91 6291030338</a>
                    </p>
                </div>
        </div>
    </div>
</footer>
</body>
</html>