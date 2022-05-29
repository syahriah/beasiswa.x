<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lolos extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama', 'inputKampus', 'ak-kampus', 'inputProdi', 'ak-prodi', 'ipk', 'ukt', 'gaji',];
}
