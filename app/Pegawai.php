<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';

    protected $fillable = ['nip', 'nama'];

    public function surat(){
    return $this->belongsToMany('App\Surat', 'surat_pegawais', 'pegawai_id', 'surat_id');
    }
}
