<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrat;

class Incident extends Model
{
    use HasFactory;
    public function contrats(){
        return $this->hasMany(Contart::class);
    }
}
