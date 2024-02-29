<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('LMS.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('LMS.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->publication = $request->publication;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->pages = $request->pages;
        $book->quantity = $request->quantity;
        $book->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
       return view('LMS.book.edit', compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->name = $request->name;
        $book->publication = $request->publication;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->pages = $request->pages;
        $book->quantity = $request->quantity;
        $book->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
