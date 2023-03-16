<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function regist()
    {
        return view('regist.index');
    }
    
    public function actionregist(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
        ]);
        return redirect('login');
    }
}


