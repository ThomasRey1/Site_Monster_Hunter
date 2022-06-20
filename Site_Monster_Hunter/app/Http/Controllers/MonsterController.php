<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonsterController extends Controller
{
    public function index()
    {
        $monsters = Monster::all();
        return view('monsters', [
            'monsters' => $monsters
        ]);
    }
    public function show($id)
    {
        $monster = Monster::findOrFail($id);
        // $posts= [
        //     1 => 'monstre 1',
        //     2 => 'monstre 2'
        // ];
        // $post = $posts[$id] ?? abort(404);
        if (Auth::check()) {
            return view('monster', [
                'monster' => $monster
            ]);
        } else {
            abort('403');
        }
    }
}
