<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'openid'
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

    public function threads() {
        return $this->hasMany(Thread::class);
    }

    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    public function businesses() {
        return $this->hasMany(Business::class, 'user_id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function contracts() {
        return $this->hasMany(Contract::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function calls() {
        return $this->hasMany(Call::class, 'user_id');
    }

    public function agendas() {
        return $this->hasMany(Agenda::class, 'user_id');
    }

    public function feedbacks() {
        return $this->hasMany(Feedback::class, 'user_id');
    }

    public function notices() {
        return $this->hasMany(Notice::class, 'to_user');
    }

    public function anouncements() {
        return $this->hasMany(UserAnouncement::class, 'user_id');
    }
}
