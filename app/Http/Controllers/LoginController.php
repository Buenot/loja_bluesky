<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin(Request $request){
       
        return view('site.login');

    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        // TODO: verificar se o email esta vazio
        // TODO: verificar se o password esta vazio
        if(empty($email)||empty($password)){
            return view ('site.login');
        }
        // TODO: verificar se o usuario existe na base de dados
        $user = DB::table('users')->where('email', $email)->first();
        if($user && Hash::check( $password , $user->password)){
            $request->session()->put('username', $user->name);
            $request->session()->put('useremail', $user->email);
            $request->session()->put('userid', $user->id);
           //print_r($request->session()->get('username'));
            return view ('index');
        }
        return view('site.login');
    }
    public function logout(Request $request){

     $login = $request->session()->get('username');
     $email = $request->session()->get('useremail'); 
     $id = $request->session()->get('iduser');   
     $request->session()->pull('username',$login);
     $request->session()->pull('useremail',$email);
     $request->session()->pull('iduser',$id);
        
        return view('index');
    }
    
}
 