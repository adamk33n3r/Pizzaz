<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = ['email', 'username', 'password'];
    public static $rules = [
        'email' => ['required', 'unique:users'],
        'username' => ['required', 'unique:users'],
        'password' => 'required'
    ];

    public $messages;

    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);
    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function isValid() {
        $validation = Validator::make($this->attributes, static::$rules);
        if ($validation->passes())
            return true;
        $this->messages = $validation->messages();
        return false;
    }

}
