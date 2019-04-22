<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    // use the API Responses trait
    use ApiResponses;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
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
