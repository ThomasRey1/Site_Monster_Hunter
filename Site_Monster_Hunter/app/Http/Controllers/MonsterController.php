<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonsterController extends Controller
{
    public function index()
    {
        $posts = Monster::all();
        return view('monsters', [
            'posts' => $posts
        ]);
    }
    public function show($id)
    {
        $post = Monster::findOrFail($id);
        // $posts= [
        //     1 => 'monstre 1',
        //     2 => 'monstre 2'
        // ];
        // $post = $posts[$id] ?? abort(404);
        if (Auth::check()) {
            return view('monster', [
                'post' => $post
            ]);
        } else {
            abort('403');
        }
    }
}
