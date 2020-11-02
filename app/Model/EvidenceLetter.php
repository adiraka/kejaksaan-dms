<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EvidenceLetter extends Model
{
    protected $table = 'evidence_letters';

    public function prosecutor() {
    	return $this->belongsTo(Prosecutor::class, 'prosecutor_id');
    }

    public function defendant() {
    	return $this->belongsTo(Defendant::class, 'defendant_id');
    }
}
