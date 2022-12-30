<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('admin.login');
    }
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.auth.login');
        }

        $credentials = $request->only(['username', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
