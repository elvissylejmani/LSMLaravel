<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libri extends Model
{
    //
    public function Zhanret()
    {
        return $this->hasMany(zhanri::class, 'id', 'id');
    }
}
