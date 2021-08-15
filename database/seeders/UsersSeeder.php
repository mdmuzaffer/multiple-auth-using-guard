<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
		$userData = [
			 ['id'=>'1','name'=>'shazidh','user_type'=>'User','email'=>'shazidh@gmail.com','password'=>'$2y$10$TKTQy2s4nH30UtE7wy6BeuI7TFcuK8c687zg6tXY2QTcaOO18Bme6'],
		];
		User::insert($userData);
    }
}
