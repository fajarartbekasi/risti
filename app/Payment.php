<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $guarded = [];

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class);
    }
}
