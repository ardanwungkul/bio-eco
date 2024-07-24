<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $table = 'tokos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'url',
        'bio',
        'no_hp',
        'alamat',
        'template',
        'gambar',
        'user_id',
        'default_product',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function link()
    {
        return $this->hasMany(Link::class);
    }
    public function socmed()
    {
        return $this->hasMany(Socmed::class);
    }
    public function product()
    {
        return $this->hasMany(Productuser::class);
    }
    public function whatsapp()
    {
        return $this->hasMany(WhatsappLink::class);
    }
}
