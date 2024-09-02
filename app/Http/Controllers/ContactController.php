<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class ContactController
{
    function index()
    {
        $data = Contact::with('student')->get();
        return view('index', compact('data'));
    }
}
