<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'server' => 'required',
            'date_of_birth' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'server' => $data['server'],
            'date_of_birth' => $data['date_of_birth'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('adminlte.layout');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function profile()
    {
        $user=Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function edit()
    {
        $user=Auth::user();
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'server'=> 'required',
            'ign'=> 'required',
            'avatar'=> 'required',
            'desc'=> 'required',
            'mainrole'=> 'required',
            'mainchamp'=> 'required',
            'date_of_birth'=> 'required',
        ]);

        $user=Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->server = $request->get('server');
        $user->ign = $request->get('ign');
        $user->avatar = $request->get('avatar');
        $user->desc = $request->get('desc');
        $user->mainrole = $request->get('mainrole');
        $user->mainchamp = $request->get('mainchamp');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->save();

        return redirect()->back();
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
