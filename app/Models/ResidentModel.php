<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResidentModel extends Model
{
    protected $table = 'resident';
    public function allData()
    {
        return DB::table('resident')->get();
    }
    public function detailData($id_resident)
    {
        return DB::table('resident')->where('id_resident', $id_resident)->first();

    }
    public function detail()
    {
        return DB::table('resident')->get();
    }
    
}
