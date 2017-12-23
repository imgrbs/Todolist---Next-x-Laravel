<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'user_id' => 1,
            'title' => 'example 1',
            'description' => 'ตัวอย่างที่ 1',
            'status' => '0'
        ]);
        DB::table('todos')->insert([
            'user_id' => 2,
            'title' => 'example 2',
            'description' => 'ตัวอย่างที่ 2',
            'status' => '0'
        ]);
        DB::table('todos')->insert([
            'user_id' => 1,
            'title' => 'example 3',
            'description' => 'ตัวอย่างที่ 3',
            'status' => '0'
        ]);
        DB::table('todos')->insert([
            'user_id' => 2,
            'title' => 'example 4',
            'description' => 'ตัวอย่างที่ 4',
            'status' => '0'
        ]);
        DB::table('todos')->insert([
            'user_id' => 1,
            'title' => 'example 5',
            'description' => 'ตัวอย่างที่ 5',
            'status' => '0'
        ]);
    }
}
