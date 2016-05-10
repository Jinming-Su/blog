<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfile() {

        $articles = Auth::user()->articles;
        return view('dashboard/profile', compact('articles'));
    }

    public function showProfile($user_id) {
        $user = User::findOrFail($user_id);
        $articles = $user->articles;
        return view('dashboard/showProfile', compact('user','articles'));
    }
}
