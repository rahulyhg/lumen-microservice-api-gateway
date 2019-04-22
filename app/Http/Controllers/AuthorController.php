<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    // use the API Responses trait
    use ApiResponses;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return a list of authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Create an author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Return an author
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        //
    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        //
    }

    /**
     * Remove an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        //
    }
}
