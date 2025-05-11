@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Search Results</h2>
    <div class="row g-4">
        @foreach($services as $service)
        <div class="col-md-4">
            <!-- Service card template similar to welcome page -->
        </div>
        @endforeach
    </div>
</div>
@endsection