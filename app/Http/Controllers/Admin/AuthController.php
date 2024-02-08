<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login_view(){
        return view('admin/auth/login');
    }

    public function login_post(Request $request){
        dd($request);
    }
}
