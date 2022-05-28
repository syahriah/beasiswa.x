<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resident extends Model
{
   protected $table = "resident";
   protected $primarykey = 'id';
   protected $fillable = [
      'id', 'rooms', 'nama', 'nomorhp', 'jumlah_keluarga', 'foto',
   ];
}
