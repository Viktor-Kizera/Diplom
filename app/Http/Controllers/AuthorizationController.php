<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authorization\LoginRequest;
use App\Http\Requests\Authorization\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    public function index ()
    {
        return view('authorization');
    }

    public function success ()
    {
        return view('success-register');
    }

    /**
     * @param RegisterRequest  $request
     */
    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);

        return redirect()->to('/authorization/success');
    }

    /**
     * @param LoginRequest  $request
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->to('/home');
        } else {
            return back()->with(['errors' => ['Невірний логін або пароль']]);
        }
    }

    public function home ()
    {
        return view('profile');
    }
}
