<?php

namespace App\Http\Controllers;

use App\Client\RiotClient;
use App\Models\Rank;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

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
            'ign' => $data['ign'],
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
        $riotClient=app(RiotClient::class);

        $rank='';
        if($user->ign){
            $rank=$riotClient->getEntries($user)[0];
        }

        $mmr='';
        if($user->ign){
            $mmr=$riotClient->getEntries($user)[1];
        }

        return view('auth.profile', compact('user', 'rank', 'mmr'));
    }

    public function edit()
    {
        $user=Auth::user();
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user=Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->server = $request->get('server');
        $user->ign = $request->get('ign');
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

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = Auth::id().'.'.$request->image->extension();

        $request->image->move(storage_path('/app/public/avatars'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        $user=Auth::user();
        $user->avatar=$imageName;
        $user->save();

        return back()->with('success','You have successfully upload image.')->with('image',$imageName);
    }

    public function showHighscores(){


        $users=User::all();
        $riotClient=app(RiotClient::class);

        $rank='';
        $mmr='';
        $rankArray=[];
        foreach($users as $user){
            $rank=Rank::where('user_id', $user->id)->first();
            if($rank){
                $rankArray[]=['user'=>$user, 'rank'=>$rank->rank, 'mmr'=>$rank->mmr];
            } else {
                $entries=$riotClient->getEntries($user);
                $rank = new Rank();
                $rank->user_id=$user->id;
                $rank->rank=$entries[0];
                $rank->mmr=$entries[1];
                $rank->save();
                $rankArray[]=['user'=>$user, 'rank'=>$rank->rank, 'mmr'=>$rank->mmr];
            }
        }

        usort($rankArray, function ($a, $b){
            return $a['mmr']<$b['mmr'];
        });

        return view('tournament.highscores', compact('rankArray'));
    }

    public function customProfile(string $name){
        $user=User::where('name', $name)->first();
        if (! $user){
            return redirect()->back()->with('error', 'there is no user');
        }
        $riotClient=app(RiotClient::class);

        $rank='';
        if($user->ign){
            $rank=$riotClient->getEntries($user)[0];
        }

        $mmr='';
        if($user->ign){
            $mmr=$riotClient->getEntries($user)[1];
        }

        return view('auth.customprofile', compact('user', 'rank', 'mmr'));

    }


}
