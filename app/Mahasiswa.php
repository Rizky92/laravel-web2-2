<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'nama', 'alamat', 'id_prodi'];

    public function Prodi()
    {
        return $this->belongsTo('App\Prodi');
    }
}
