<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function userLogin(Request $req){
        // $validate = $req->validate([
        //     'cus_name'=>'required',
        //     'cus_email'=>'required|unique:user'
        // ]);
        $data = $req->input('cus_name');
        $req -> session()->put('cus_name',$data);
       return redirect('profile');
    }
}
