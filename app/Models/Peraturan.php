<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $table = 'peraturan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'no', 'judul', 'jenis_peraturan', 'pemrakarsa', 'no_peraturan', 'thn_ditetapkan', 'tempat_penetapan', 'dokumen'];
}
