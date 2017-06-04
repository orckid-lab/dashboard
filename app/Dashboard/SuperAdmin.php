<?php

namespace App\Dashboard;

use App\User;

class SuperAdmin extends User
{
	protected $table = 'users';

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = bcrypt($value);
	}
}
