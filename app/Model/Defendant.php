<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Defendant extends Model
{
    protected $table = 'defendants';

    public function prosecutor() {
    	return $this->belongsTo(Prosecutor::class, 'prosecutor_id');
    }

    public function evidence_letters() {
    	return $this->hasMany(EvidenceLetter::class, 'defendant_id');
    }
}
