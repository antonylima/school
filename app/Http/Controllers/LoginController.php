<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    
    public function validar(Request $req)
    {
        //$user = $req->input('user');
        //echo"<h1 style='color:red'>$user</h1>";
        
        if($req->user !== null && $req->pass !== null)
        {
            //return view('school.index');
            if($req->user == 'admin' && $req->pass == 'admin'){
                return redirect()->route('school-index');
                $req->user = "";
                $req->pass = "";

            }else{
                return view('login')."<h5 style='color:red;text-align:center'><b>Dados incorretos</b></h5>";
            }
        }else{
                return view('login')."<h5 style='color:red;text-align:center'><b>Preencha os campos corretamente</b></h5>";
        //dd($req->all());
            //return redirect()->route('tela-login');     
        }        
    }
}


?>



