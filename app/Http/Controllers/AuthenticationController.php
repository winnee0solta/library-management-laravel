<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthenticationController extends Controller
{
    public function loginView()
    {
        return view('login');
    }
    public function registerView()
    {
        return view('register');
    }

    public function registerAdmin($name, $phone, $email, $password)
    {

        $user = User::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => bcrypt($password),
            'title' => 'admin'
        ]);

        $data = array('message' => 'user created', 'data' => $user);
        return Response($data, 202);
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        //check if mail exists
        if (User::where('email', $request->email)->count() > 0) {
            return redirect('/register')->withErrors(['Email already exists']);
        }

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'title' => 'public'
        ]);

        auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect('/register')->withErrors(['Invalid Credentials']);
        }
    }
    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);


        auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect('/login')->withErrors(['Invalid Credentials']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
