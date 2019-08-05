<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rafti extends Model
{
    //
    public function Liber()
    {
        return $this->belongsTo(Libri::class, 'ID_Rafti', 'id');
    }
}
