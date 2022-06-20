<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArmorController extends Controller
{
    public function index($level)
    {
        $armors = Armor::where('levelArmor',$level)->paginate(10);

            return view('armors', [
                'armors' => $armors,
                'level' =>  $level
            ]);
    }
    public function show($id)
    {
        $armor = Armor::findOrFail($id);
        // $posts= [
        //     1 => 'monstre 1',
        //     2 => 'monstre 2'
        // ];
        // $post = $posts[$id] ?? abort(404);
        if (Auth::check()) {
            return view('armor', [
                'armor' => $armor
            ]);
        } else {
            abort('403');
        }
    }
}
