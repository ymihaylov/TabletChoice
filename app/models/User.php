<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['email', 'name', 'password'];

	public static $rules = [
		'email' => 'required',
		'name' => 'required',
		'password' => 'required',
	];

	public $messages;

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

	public function isValid()
	{
		$validation = Validator::make($this->attributes, self::$rules);

		if ($validation->passes()) return true;

		$this->messages = $validation->messages();

		return false;
	}

	public function setPasswordAttribute($password) {

		$this->attributes['password'] = Hash::make($password);

	}
}