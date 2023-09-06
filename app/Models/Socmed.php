<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socmed extends Model
{
    use HasFactory;
    protected $table = 'socmeds';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'gambar',
        'url',
        'toko_id',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
