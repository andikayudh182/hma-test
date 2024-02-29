<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $activeUsersCount = User::where('status', 1)->count();
        $UsersCount = User::count();

        return view('home', [
            'userActive'=> $activeUsersCount,
            'usersCount'=> $UsersCount
        ]);
    }
}
