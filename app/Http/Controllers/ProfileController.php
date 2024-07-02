<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('welcome', compact('profiles'));
    }

    public function create()
    {
        //
    }
}
