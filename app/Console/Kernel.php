<?php

namespace App\Console;

use App\Console\Commands\Dashboard\ControllerMake;
use App\Console\Commands\Dashboard\MiddlewareMake;
use App\Console\Commands\Dashboard\ModelMake;
use App\Console\Commands\Dashboard\RequestMake;
use App\Console\Commands\Dashboard\UserMake;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		ControllerMake::class,
		ModelMake::class,
		RequestMake::class,
		MiddlewareMake::class,
		UserMake::class,
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		// $schedule->command('inspire')
		//          ->hourly();
	}

	/**
	 * Register the Closure based commands for the application.
	 *
	 * @return void
	 */
	protected function commands()
	{
		require base_path('routes/console.php');
	}
}
