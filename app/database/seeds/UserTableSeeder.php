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
		User::create(array(
			'first'     		=> 'Shawn',
			'last'				=> 'Scofield',
			'username'			=> 'sscofield',
			'email'				=> 'sscofield@singlehop.com',
			'has_two_factor'	=> '1',
			'password'			=> Hash::make('singlehop'),
		));
		User::create(array(
			'first'     		=> 'Roger',
			'last'				=> 'Wakeman',
			'username'			=> 'rwakeman',
			'email'				=> 'rwakeman@singlehop.com',
			'has_two_factor'	=> '1',
			'password'			=> Hash::make('singlehop'),
		));		
	}
}