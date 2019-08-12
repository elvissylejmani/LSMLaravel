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
        return $this->hasMany(zhanri::class, 'id', 'ID_Zhanri');
    }
    public function Rafti()
    {
        return $this->hasMany(Rafti::class, 'ID_Rafti', 'ID_Rafti');
    }
    public function ShtepiaBotuese()
    {
        return $this->hasMany(ShtepiaBotuese::class, 'id', 'ID_ShtepiaBotuese' );
    }
}
