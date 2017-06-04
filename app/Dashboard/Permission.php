<?php

namespace App\Dashboard;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * @package App\Dashboard
 */
class Permission extends Model
{
	/**
	 * @var array
	 */
	protected $fillable = [
		'slug',
		'label',
		'description',
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function roles()
	{
		return $this->belongsToMany(Role::class)->withTimestamps();
	}
}
