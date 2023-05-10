<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrat;
use App\Models\Reservation;

class Client extends Model
{
    use HasFactory;
    public function contrats(){
        return $this->hasMany(Contart::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
