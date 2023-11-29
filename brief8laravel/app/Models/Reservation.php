<?php

namespace App\Models;

use App\Models\Evenement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    public function evenements(){
        return $this->hasmany(Evenement::class);
    }
    public function users(){
        return $this->hasmany(User::class);
    }
    protected $fillable = [
        'reference',
        'date_reservation',
        'statut',
        'nombre_place',
       
       

    ];
}
