<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kategori_id', 'nama_tugas', 'ket_tugas', 'status_tugas'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
