<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected function registered(Request $request, $user)
{

    $this->guard()->logout();

    return redirect('/login')->with('status', 'Your account has been created. Please wait for admin approval.');
}
}
