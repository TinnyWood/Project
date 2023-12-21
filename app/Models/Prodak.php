<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodak extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'nama_proses',
        'klasifikasi_perubahan',
        'pelaksanaan2ndQA',
        'item_perubahan',
        'no_lembar_instruksi',
        'tanggal_produksi_saat_perubahan',
        'shiftt',
        'part_number_finish_good',
        'kualitas',
        'fakta_ng',
        'pcdt',
        'tanggal_perubahan_pcdt',
        'instruksi_kerja',
        'tanggal_perubahan_instruksi_kerja',
        'isir',
        'tanggal_perubahan_isir',
        'pemahaman',
        'ulasan',
    ];

    // You can also define relationships, custom methods, or other configurations here
}
