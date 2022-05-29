<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
   protected $table = "pendaftar";
   protected $primarykey = 'id';
   protected $fillable = [
      'id', 'nama', 'inputKampus', 'ak-kampus', 'inputProdi', 'ak-prodi', 'ipk', 'ukt', 'gaji','foto',
   ];
}
