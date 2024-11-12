<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function logIntoAdmin(Request $request)
    {
        // This route will redirect to admin after being logged in via EU Login
          return redirect('/admin');
    }
}
