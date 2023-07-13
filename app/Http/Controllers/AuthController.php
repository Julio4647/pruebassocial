<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Communitys;
use App\Models\Coordinadores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');

        foreach ($users as $user) {
            echo $user->name;
        }
    }

    //Login
    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Autenticación exitosa para el guard 'admin'
            return redirect()->intended('/dashboard/admin');
        }

        if (Auth::guard('coordinador')->attempt($credentials)) {
            // Autenticación exitosa para el guard 'coordinador'

            return redirect()->intended('/dashboard/coordinador');
        }

        if (Auth::guard('community')->attempt($credentials)) {
            // Autenticación exitosa para el guard 'community'
            return redirect()->intended('/dashboard/community');
        }
    }

    //Register
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        $admin = Admins::create([
            'name' => $request->name,
            'email' => $request->email,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
        ]);

        $admin->assignRole('admin');

        return redirect()->route('login');
    }

    //Signout
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
