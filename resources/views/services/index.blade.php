@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-5 fw-bold">{{ $category ?? 'All' }} Services</h1>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($services as $service)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->title }}</h5>
                    <p class="card-text">{{ Str::limit($service->description, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">{{ $service->category }}</span>
                        <a href="{{ route('services.show', $service) }}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection