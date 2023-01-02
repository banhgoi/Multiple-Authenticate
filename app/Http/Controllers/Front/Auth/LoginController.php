<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('front.auth.login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->route('customer.home');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
