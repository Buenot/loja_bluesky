<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function cadastro(Request $request){
        //Validacao
        $input = Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'required|string',
            'confirmemail' =>'required|string',
            'password' =>'required|string',
       ]);

       if (!$input->fails()) {
        $name = $request->name;
        //print_r($name);
        $email = $request->email;
        //print_r($email);
        $confirmemail = $request->confirmemail;
        //print_r($confirmemail);
        $password = Hash::make($request->password);
        // $password= md5($request->password);
        //print_r($password);
        
        //Envio para o banco
        $user = new User(); 
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return view('site.login'); 
       }
        //Consulta ao banco
        // $verifyUser = User::where('email', $email)->first();
        //print_r($verifyUser->password);

       return view('site.cadastro'); 
    }
    public function viewCadastro(){
        return view('site.cadastro'); 
    }

}
