<?php

namespace LSM;

use Illuminate\Database\Eloquent\Model;

class Libri extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];

    //
    public function Zhanret()
    {
        return $this->hasMany(zhanri::class, 'id', 'id');
    }
    public function Rafti()
    {
        return $this->hasMany(Rafti::class, 'ID_Rafti', 'id');
    }
    public function ShtepiaBotuese()
    {
        return $this->hasMany(ShtepiaBotuese::class, 'id', 'id' );
    }
}
