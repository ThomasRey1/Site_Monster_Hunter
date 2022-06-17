<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArmorController extends Controller
{
    public function index()
    {
        $armors = Armor::paginate(10);
        if ($_GET["level"] == 'Expert') {
            return view('armors', [
                'armors' => $armors,
                'level' =>  'Expert'
            ]);
        }else{
            return view('armors', [
                'armors' => $armors,
                'level' =>  'Novice'
            ]);
        }
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
