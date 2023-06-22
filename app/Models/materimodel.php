<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materimodel extends Model
{

    use HasFactory;
    protected $table = 'materi';
    protected $guarded = [];
    protected $primaryKey = 'idmateri';
    protected $fillable = ['idmateri', 'no', 'judul', 'deskripsi', 'penulis', 'kategori', 'tanggal', 'layanan', 'file', 'video'];

    public function kategori()
    {
        return $this->belongsTo(\App\kategori::class, 'id', 'id');
    }
}
