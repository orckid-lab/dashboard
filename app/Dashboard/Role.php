<?php

namespace App\Dashboard;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App\Dashboard
 */
class Role extends Model
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
	public function permissions()
	{
		return $this->belongsToMany(Permission::class);
	}
}
