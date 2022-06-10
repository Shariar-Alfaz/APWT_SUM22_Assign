<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function createUser()
    {
        return view('register');
    }
    public function create(Request $req)
    {
        $req->validate(
            [
                'name'=>'required|max:20|regex:/^[a-zA-Z .-]*+$/',
                'email'=>'required|email',
                'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'con'=>'same:password'
            ]);
            $u=new User();
            $u->name = $req->name;
            $u->email = $req->email;
            $u->password = $req->password;
            $u->save();
            return redirect()->route('home'); 
    }
    public function login()
    {
        return view('login');
    }
    public function validateLogin(Request $req)
    {
        $req->validate(
            [
                'email'=>'required|email',
                'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ]);
            $user = User::all();
            foreach($user as $u){
                if($u->email == $req->email && $u->password == $req->password)
                {
                    if($u->type =='user')
                    {
                        return redirect('/userDashbord')->with('users',$user);
                    }else{
                        return redirect('/adminDashbord')->with('users',$user);
                    }
                }
            }
        return "Not found";
    }
    public function userDashbord()
    {
        $user = User::all();
        return view('userDashbord')->with('users',$user);
    }
    public function adminDashbord()
    {
        $user = User::all();
        return view('adminDashbord')->with('users',$user);
    }
    public function getDetails($id)
    {
        $user = User::find($id);
        return view('details')->with('user',$user);
    }
}
