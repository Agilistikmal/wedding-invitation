<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'nama_pria', 'nama_wanita', 'alamat', 'tanggal', 'waktu_mulai', 'waktu_selesai'];
}
