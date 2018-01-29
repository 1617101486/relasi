<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\hobi;

class hobi extends Model
{
    protected $table = 'hobi';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('hobi');


public function mahasiswa() {
		return $this->belongsToMany('App\mahasiswa', 'mahasiswa_hobi', 'id_hobi', 'id_mahasiswa');
	}


}
