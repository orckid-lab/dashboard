<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Routing\Console\MiddlewareMakeCommand;

class MiddlewareMake extends MiddlewareMakeCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'dashboard:middleware';

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\Dashboard\Middleware';
	}
}
