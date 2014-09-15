<?php

class DatabaseSeeder extends Seeder {


	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->delete();
        User::create([
            "username"  => "bappa2du",

            "password"  => Hash::make('1234')
        ]);
    }
}
