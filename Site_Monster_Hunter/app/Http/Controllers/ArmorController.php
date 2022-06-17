<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArmorController extends Controller
{
    public function index()
    {
        $armors = DB::table('armors')->paginate(2);
        return view('armors', [
            'armors' => $armors
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
