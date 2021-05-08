<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    function index () {
        return view ('contact');
    }
    public function store(ContactRequest $request)
    {
        return view('contact');
    }
}

