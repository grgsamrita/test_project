<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Detail;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//add first row
		Detail::create( [ 
			'name' => 'suchu',
			'address' => 'pkr',
			'comment'=> 'Hello',
			]);
			//add second row
			Detail::create( [ 
			'name' => 'sulochana',
			'address' => 'syg',
			'comment'=> 'hi',
			]);

		//$this->call('UserTableSeeder');
		
	}

}

