<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendaftarModel extends Model
{
    protected $table = 'pendaftar';
    public function allData()
    {
        return DB::table('pendaftar')->get();
    }
    public function detailData($id_pendaftar)
    {
        return DB::table('pendaftar')->where('id_pendaftar', $id_pendaftar)->first();

    }
    public function detail()
    {
        return DB::table('pendaftar')->get();
    }
    
}
