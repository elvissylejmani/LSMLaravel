<?php

namespace LSM;

use Illuminate\Database\Eloquent\Model;

class zhanri extends Model
{
    //
    public function Librat()
    {
        return $this->belongsTo(Libri::class,'id','id');
    }
}
