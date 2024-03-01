<?php

namespace App\Http\Controllers\Admin;   // <--- A cosa serve il namespace e che vantaggi apporta?

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Book;

class BookController extends Controller
{
    /*

        R - Read

    */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));   // <--- Cosa fa la funzione compact()?
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)    // <--- Come si chiama questo modo di passare un dato?
    {
        return view('books.show', compact('book'));
    }
    /* ----- Fine Read ----- */

    /*

        C - Create

    */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bookData = $request->all();

        $book = new Book();
        // Riempio tutte le colonne...
        $book->save();

        return redirect()->route('books.show', ['book' => $book->id]);
    }
    /* ----- Fine Create ----- */

    /*

        U - Update

    */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }
    /* ----- Fine Update ----- */

    /*

        D - Delete

    */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
    /* ----- Fine Delete ----- */
}
