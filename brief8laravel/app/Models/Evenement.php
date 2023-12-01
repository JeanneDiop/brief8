<?php

namespace App\Models;

use App\Models\Assocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;
    public function assocations(){
        return $this->belongsTo(Assocation::class);
    }
    protected $fillable = [
        'libelle',
        'date_limite_inscription',
        'description',
        'image',
        'statut',
        'date_evenement',
        'assocation_id',

       

    ];
    public function reservation(){
        return $this->hasmany(Reservation::class);
    }
}
