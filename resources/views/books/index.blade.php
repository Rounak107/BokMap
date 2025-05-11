@extends('layouts.app')

@section('content')
<div class="container">
    <h1>BookMap</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>
    
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $book->author }}</h6>
                    <p class="card-text">{{ Str::limit($book->description, 100) }}</p>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection