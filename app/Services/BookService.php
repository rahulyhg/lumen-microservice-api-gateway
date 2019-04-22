<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class BookService
{
    use ConsumeExternalServices;

    /**
     * Book service base uri
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }
}
