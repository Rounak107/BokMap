@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Same form fields as create view -->
        <!-- Pre-fill existing values -->
        <input type="text" name="title" value="{{ $book->title }}" class="form-control">
        <!-- Add all other fields similarly -->
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection