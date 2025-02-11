<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{

    protected int $per_page;


    public function __construct(Request $request)
    {
        $this->per_page = $request->query('per_page') ?? config('app.per_page');
    }
}
