<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'laptop';

    protected $fillable = [
        'id_kategori',
        'merk_laptop',
        'gambar',
        'deskripsi',
        'lampiran',
        'lampiran_nama' 
    ];

    protected $casts = [
        'lampiran' => 'array',
        'lampiran_nama' => 'array', 
    ];

    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
