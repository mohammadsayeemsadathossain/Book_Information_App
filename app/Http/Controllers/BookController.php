<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{

    public function index(): View
    {
        $book = Book::all();
        return view ('books.index')->with('books', $book);
    }

 
    public function create(): View
    {
        return view('books.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Book::create($input);
        return redirect('book')->with('flash_message', 'Book Added!');
    }

    public function show(string $id): View
    {
        $book = Book::find($id);
        return view('books.show')->with('books', $book);
    }

    public function edit(string $id): View
    {
        $book = Book::find($id);
        return view('books.edit')->with('books', $book);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $book = Book::find($id);
        $input = $request->all();
        $book->update($input);
        return redirect('book')->with('flash_message', 'Book Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Book::destroy($id);
        return redirect('book')->with('flash_message', 'Book deleted!'); 
    }
}