<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiModel extends Model
{
    use HasFactory;
    protected $table = 'lokasi';
    public $timestamps = false;
    protected $softDelete = false;
    protected $primaryKey = 'id_lokasi';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_lokasi', 'nama_lokasi', 'penanggung_jawab', 'keterangan'];
}
