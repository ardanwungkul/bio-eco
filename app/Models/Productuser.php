<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productuser extends Model
{
    use HasFactory;
    protected $table = 'product_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'gambar',
        'harga',
        'deskripsi',
        'toko_id',
    ];
    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
