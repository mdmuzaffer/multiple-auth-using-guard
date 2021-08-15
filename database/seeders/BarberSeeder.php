<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barbers')->delete();
		$adminData = [
			 ['id'=>'1','name'=>'Raman','user_type'=>'Barber','email'=>'raman@gmail.com','password'=>'$2y$10$TKTQy2s4nH30UtE7wy6BeuI7TFcuK8c687zg6tXY2QTcaOO18Bme6'],
		];
		DB::table('barbers')->insert($adminData);
    }
}
