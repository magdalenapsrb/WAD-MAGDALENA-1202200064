<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function show($id)
    {
        $Profile = User::all();
        return view('profile.index', compact('User'));
    } 
}