<?php

namespace App\Console\Commands\Dashboard;

use App\Dashboard\SuperAdmin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class UserMake extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'dashboard:admin {email} {password}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$data = [
			'email' => $this->argument('email'),
			'password' => $this->argument('password'),
		];

		$validator = Validator::make($data, [
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6',
		]);

		if($validator->fails()){
			$this->error($validator->errors());

			return;
		}

		$user = SuperAdmin::create($data);

		$user->super_admin = 1;

		$user->save();

		$this->info("The admin with email $user->email has been created successfully.");
	}
}
