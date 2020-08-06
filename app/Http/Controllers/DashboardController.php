<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        $users = User::where('id', '!=', Auth::id())->get();
        return view('dashboard')->with('users', $users);
    }

    // gets message with id
    public function getMessage($user_id)
    {
        return $user_id;
    }
}
