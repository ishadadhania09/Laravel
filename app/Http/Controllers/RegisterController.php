<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'rollno' => 'required',
            'city' => 'required',
            'email' => 'required'
        ]);
        dd($data);
        // Save the data to the database or perform any other necessary actions

        // Redirect to the show page, passing the data's ID as a route parameter
        // return redirect()->route('tasks.show', ['id' => 1]);
    }
}
?>