<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{

    protected int $per_page = 10;


    public function __construct(Request $request)
    {
        $this->per_page = $this->per_page ?? $request->query('per_page', 10);
    }
}
