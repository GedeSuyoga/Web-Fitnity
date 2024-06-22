<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = ['tanggal', 'nama', 'deskripsi', 'tempat', 'gambar', 'link'];
    protected $table = 'event';
    public $timestamps = false;
}