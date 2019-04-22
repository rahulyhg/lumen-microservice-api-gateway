<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponses;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    /**
     * Return the list of books
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Create a new book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * return a single book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        //
    }

    /**
     * Update a book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        //
    }

    /**
     * Remove a book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
        //
    }
}
