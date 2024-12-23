<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'login' => ['required', 'regex:~^[А-ЯЕа-яё]+$~u'],
            'password' =>'required|string'
        ]);

        if(Auth::attempt(['login' => $request->login, 'password' => $request->password])){
            return redirect()->intended('/');

        }
        return back()->withErrors(['login' => 'Неверный']);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
