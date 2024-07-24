<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappLink extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'whatsapp_links';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'no_hp',
        'nama',
        'pesan',
        'toko_id',
    ];
    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
