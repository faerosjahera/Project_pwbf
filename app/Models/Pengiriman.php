<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table="pengiriman";
    protected $primaryKey="id_pengiriman";
    protected $fillable=[
        'id_transaksi',
        'alamat_kirim',
        'stts_kirim'
    ];
}
