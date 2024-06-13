<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang'; // Set the table name

    protected $fillable = ['merk', 'seri', 'spesifikasi', 'stok', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
    
    public function barangmasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangkeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

}