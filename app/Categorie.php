<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function permintaans()
    {
        return $this->hasMany(Request::class);
    }
}
