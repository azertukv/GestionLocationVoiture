<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Operation;
class Entretien extends Model
{
    use HasFactory;
    public function operation(){
        return $this->belongsTo(Operation::class);
    }
}
