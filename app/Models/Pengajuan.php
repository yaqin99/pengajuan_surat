<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

  

    public function user(){

        return $this->belongsTo(User::class);
       
    }
    public function jenis(){

        return $this->belongsTo(Jenis::class);
       
    }

    public function scopeSearchPengajuan($query ){
        if (request('search')) {
            $query->whereHas('jenis', function ($query) {
                $query->where('nama_surat','like','%'.request('search').'%');
                // ->orWhere('nik','like','%'.request('search').'%');
            });
          
      }
      }

}
