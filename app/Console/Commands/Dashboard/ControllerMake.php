<?php

namespace App\Console\Commands\Dashboard;

use Illuminate\Routing\Console\ControllerMakeCommand;

class ControllerMake extends ControllerMakeCommand
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'dashboard:controller';

	/**
	 * Get the default namespace for the class.
	 *
	 * @param  string $rootNamespace
	 * @return string
	 */
	protected function getDefaultNamespace($rootNamespace)
	{
		return $rootNamespace . '\Dashboard\Controllers';
	}
}
