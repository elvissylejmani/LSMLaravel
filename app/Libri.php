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
    public function Rafti()
    {
        return $this->hasMany(Rafti::class, 'ID_Rafti', 'id');
    }
}
