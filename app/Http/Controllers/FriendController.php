<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function create()
    {
        return view('friends.create');
    }
}
