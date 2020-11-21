<?php

namespace App\Models;

class Belijus extends Model {
	protected $table = 'belijus2';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
}