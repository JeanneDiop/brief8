<?php

namespace App\Models;

use App\Models\Evenement;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Assocation extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public function evenements(){
        return $this->hasMany(Evenement::class);
    }
  

    
    protected $table = 'assocations'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
                'logo',
                'name',
                'date_creation',
                'slogan',
                'email',
                'password',
               
        
            ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
// {
    
    
//     use HasFactory;
//     protected $fillable = [
//         'name',
//         'date_creation',
//         'slogan',
//         'logo',
//         'email',
//         'password',
       

//     ];





// }
