<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];


    public function pengajuan (){

       return $this->hasMany(Pengajuan::class);

    }

    public function berkas (){

        return $this->belongsTo(Berkas::class);
 
     }

    public function scopeSearchUser($query ){
        if (request('search')) {
            
     $query->where('name','like','%'.request('search').'%');
               
          
      }
      }
}
