<?php

namespace App\Models;

use App\Models\Armor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armorDetail extends Model
{
    use HasFactory;

    public function armor(){
        return $this->belongsTo(Armor::class);
    }
}
