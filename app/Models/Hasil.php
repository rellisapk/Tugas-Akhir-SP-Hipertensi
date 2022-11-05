<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyakit;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','konsultasi_id', 'penyakit_id', 'nilai_akurasi'
    ];

    public function penyakit(){
        return $this->belongsTo(Penyakit::class, 'penyakit_id', 'id');
    }
}
