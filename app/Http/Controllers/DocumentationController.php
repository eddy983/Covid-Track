<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index() {
        // return 'hello';
        return view("scribe.index");
    }
}
