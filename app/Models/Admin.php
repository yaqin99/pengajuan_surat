<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable ; 
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use  Notifiable;
    protected $guarded = ['id'];

    public function scopeSearchAdmin($query ){
        if (request('search')) {
            
     $query->where('name','like','%'.request('search').'%');
               
          
      }
      }
    // protected $fillable = [
    //     'name' , 
    //     'username' , 
    //     'email' , 
    //     'password',
    // ];
}
