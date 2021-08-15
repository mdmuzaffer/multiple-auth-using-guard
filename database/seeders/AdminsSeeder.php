<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use DB;
class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('admins')->delete();
		$adminData = [
			 ['id'=>'1','name'=>'Admin','user_type'=>'Admin','email'=>'admin@gmail.com','password'=>'$2y$10$TKTQy2s4nH30UtE7wy6BeuI7TFcuK8c687zg6tXY2QTcaOO18Bme6'],
		];
		DB::table('admins')->insert($adminData);
       
    }
}
