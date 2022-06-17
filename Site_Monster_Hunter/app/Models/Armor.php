<?php

namespace App\Models;

use App\Models\armorDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    use HasFactory;

    public function armorDetails(){
        return $this->hasMany(armorDetail::class);
    }
}
