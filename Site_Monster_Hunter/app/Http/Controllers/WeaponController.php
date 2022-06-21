<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Models\WeaponType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeaponController extends Controller
{
    public function index()
    {
        $weaponType = WeaponType::all();

            return view('weapons', [
                'weaponType' => $weaponType
            ]);
    }
    public function showType($idType)
    {
        $weapons = Weapon::all();
        $type = WeaponType::findOrFail($idType);
        if (Auth::check()) {
            return view('weaponsType', [
                'weapons' => $weapons,
                'type' => $type
            ]);
        } else {
            abort('403');
        }
    }
    public function show($idType, $id)
    {
        $weapon = Weapon::findOrFail($id);
        $type = WeaponType::findOrFail($idType);
        if (Auth::check()) {
            return view('weapon', [
                'weapon' => $weapon,
                'type' => $type
            ]);
        } else {
            abort('403');
        }
    }
}
