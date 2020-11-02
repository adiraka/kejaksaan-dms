<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prosecutor extends Model
{
    protected $table = 'prosecutors';

    public function evidence_letters() {
    	return $this->hasMany(EvidenceLetter::class, 'prosecutor_id');
    }

    public function defendants() {
    	return $this->hasMany(Defendant::class, 'prosecutor_id');
    }
}
