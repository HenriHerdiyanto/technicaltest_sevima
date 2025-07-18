<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $users = User::all();

        $posts = Post::with(['user', 'comments.user']) // eager loading: user post & user komentar
            ->latest()
            ->get();

        return view('home', compact('users', 'posts'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
