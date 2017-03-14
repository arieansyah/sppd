<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Surat extends Model
{
    protected $table = 'surats';

    protected $fillable = ['date', 'nomor'];

    public function getSuratPegawaiAttribute(){
    	return $this->pegawais->select('id')->toArray();
	}

    public function pegawai(){
    return $this->belongsToMany('App\Pegawai', 'surat_pegawais', 'surat_id', 'pegawai_id')->withTimeStamps();    	
    }
}
