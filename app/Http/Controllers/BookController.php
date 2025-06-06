<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'published_date' => 'required|date'
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }
    public function edit(Book $book)
{
    return view('books.edit', compact('book'));
}

public function update(Request $request, Book $book)
{
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'description' => 'required',
        'published_date' => 'required|date'
    ]);

    $book->update($request->all());
    return redirect()->route('books.show', $book);
}

public function destroy(Book $book)
{
    $book->delete();
    return redirect()->route('books.index');
}                                                                            

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}