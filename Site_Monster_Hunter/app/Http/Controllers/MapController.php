<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{
    public function index()
    {
        $maps = Map::all();
        return view('maps', [
            'maps' => $maps
        ]);
    }
    public function show($id)
    {
        $map = Map::findOrFail($id);
        if (Auth::check()) {
            return view('map', [
                'map' => $map
            ]);
        } else {
            abort('403');
        }
    }
}
