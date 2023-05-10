<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contart;
use App\Models\User;
use App\Models\Operation;

class Flotte extends Model
{
    use HasFactory;
    public function contrats(){
        return $this->hasMany(Contart::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function operation(){
        return $this->belongsTo(Operation::class);
    }
}
