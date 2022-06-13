<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index(){
        $posts = Monster::all();
        return view('monsters', [
            'posts' => $posts
        ]);
    }
    public function show($id){
        $post = Monster::findOrFail($id);
        // $posts= [
        //     1 => 'monstre 1',
        //     2 => 'monstre 2'
        // ];
        // $post = $posts[$id] ?? abort(404);

        return view('monster', [
            'post' => $post
        ]);
    }

    public function create(){
        return view('view');
    }
}
