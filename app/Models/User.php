<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $primaryKey = 'id';

    /**
     * Check if user is verified.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Returns the User session object.
     *
     * @return array
     */
    public function getUser()
    {
        return $this;
    }

    /**
     * Returns the User id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the User name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the User email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Check if user is admin.
     *
     * @return TINYINT bool
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * Check if user is verified.
     *
     * @return TINYINT bool
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * Returns the User avatar file location.
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Returns the User hashed password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
