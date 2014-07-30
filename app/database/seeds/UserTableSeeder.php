<?php 
class UserTableSeeder extends Seeder {
	public function run() {
		User::create(array(
		'first'     		=> 'Aaron',
		'last'				=> 'Ryou',
		'username'			=> 'aryou',
		'email'				=> 'aryou@singlehop.com',
		'has_two_factor'	=> '1',
		'password'			=> Hash::make('singlehop'),
		));		
		User::create(array(
		'first'     		=> 'Marcus',
		'last'				=> 'Hightower',
		'username'			=> 'mhightower',
		'email'				=> 'mhightower@singlehop.com',
		'password'			=> Hash::make('singlehop'),
		));
		User::create(array(
		'first'     		=> 'Ricardo',
		'last'				=> 'Talavera',
		'username'			=> 'rtalavera',
		'email'				=> 'rtalavera@singlehop.com',
		'has_two_factor'	=> '1',
		'password'			=> Hash::make('singlehop'),
		));		
	}
}