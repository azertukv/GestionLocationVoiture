<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flotte;
use App\Models\Entretien;

class Operation extends Model
{
    use HasFactory;
    public function flottes(){
        return $this->hasMany(Flotte::class);
    }
    public function entretiens(){
        return $this->hasMany(Entretien::class);
    }
}
