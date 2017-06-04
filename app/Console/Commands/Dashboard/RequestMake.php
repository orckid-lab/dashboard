<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Foundation\Console\RequestMakeCommand;

class RequestMake extends RequestMakeCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'dashboard:request';

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\Dashboard\Requests';
	}
}
