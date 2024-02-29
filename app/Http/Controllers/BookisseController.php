<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookisseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookissus = BookIssue::where('status', 'out')->get();
        return view('LMS.issue.index', compact('bookissus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        $students = Student::all();
        return view('LMS.issue.create', compact('books', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $bookissus = new BookIssue();
        // $bookissus->bookID = $request->bookID;
        $expire = Carbon::now()->addDay($request->days);
        $bookissus = new BookIssue();
        $bookissus->bookID = $request->bookID;
        $bookissus->book_id = $request->book_id;
        $bookissus->student_id = $request->student_id;
        $bookissus->expiry_date = $expire;
        $bookissus->save();

        $book = Book::find($request->book_id);
        $book->decrement('quantity');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $bookissue = BookIssue::find($id);
       $bookissue->status = 'in';
       $bookissue->update();
       $book = Book::find($bookissue->book_id);
        $book->increment('quantity');
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
