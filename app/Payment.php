<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $guarded = [];

    public function permintaans()
    {
        return $this->hasMany(Permintaan::class);
    }
}
