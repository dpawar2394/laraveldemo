<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;


class studentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'=>str::random(10),
            'email'=>str::random(10),
            'created_at'=>date("Y-m-d H-i-s"),
            'updated_at'=>date("Y-m-d H-i-s")
        ]);
    }
}