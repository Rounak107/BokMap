@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $book->title }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">By {{ $book->author }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Published: {{ $book->published_date->format('M d, Y') }}
            </h6>
            <p class="card-text">{{ $book->description }}</p>
            <a href="{{ route('books.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection