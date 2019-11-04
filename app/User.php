<?php

namespace LSM;

use Illuminate\Notifications\Notifiable;
use LSM\Notifications\MailResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Emri', 'Mbiemri', 'NrPersonal','NrIdentifikues', 'DataELindjes','ID_Roli','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Roli()
    {
        return $this->hasMany(Roli::class, 'id', 'ID_Roli');
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordNotification($token));
    }
}
