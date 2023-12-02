<?php

namespace App\Models;

use App\Models\User;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    public function evenement(){
        return $this->belongsTo(Evenement::class);
    }
  
    public function user(){
        return $this->belongsTo(User::class);
    }
   
    protected $fillable = [
        'nombre_place',
        'user_id',
        'evenement_id',
       
       

    ];
}
