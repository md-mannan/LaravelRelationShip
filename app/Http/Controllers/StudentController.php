<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController
{
    function index()
    {
        $contact = Student::with('contact')->get();
        $student = Contact::with('student')->get();
        return view('index', compact('student', 'contact'));
    }
}
