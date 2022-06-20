<?php

namespace App\Http\Controllers;

use App\Models\Fauns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaunController extends Controller
{
    public function index()
    {
        $fauns = Fauns::all();
        return view('fauns', [
            'fauns' => $fauns
        ]);
    }
    public function show($id)
    {
        $faun = Fauns::findOrFail($id);
        if (Auth::check()) {
            return view('faun', [
                'faun' => $faun
            ]);
        } else {
            abort('403');
        }
    }
}
