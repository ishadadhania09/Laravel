<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        // Handle form submission here
        // You can access form fields using $request->input('field_name')

        // For example, let's just display the submitted data for demonstration purposes:
        $name = $request->input('name');
        $email = $request->input('email');

        return "Form submitted successfully. Name: $name, Email: $email";
    }
}
