<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'id_user',
        'nama_produk',
        'harga_produk',
        'status',
        'gambar',
        'deskripsi',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

}
