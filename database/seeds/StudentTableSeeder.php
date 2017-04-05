<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'  =>  str_random(10),
            'age'   =>  mt_rand(18,25),
            'sex'   =>  mt_rand(0,2),
            'created_at'=>date('Y-m-d H:i:s',time())

        ]);
    }
}
