@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Service</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Service Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option value="cleaning">Cleaning</option>
                                <option value="repair">Repair</option>
                                <option value="consulting">Consulting</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Service Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration">
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Service Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">List Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection