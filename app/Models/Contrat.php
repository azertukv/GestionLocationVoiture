<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Incident;
use App\Models\Flotte;

class Contrat extends Model
{
    use HasFactory;
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function incident(){
        return $this->belongsTo(Incident::class);
    }
    public function flotte(){
        return $this->belongsTo(Flotte::class);
    }
}
