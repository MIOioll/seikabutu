<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Comment_returnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment_returns')->insert([//
        'user_id'=>1,
        'body'=>'testです',
            'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> new DateTime(),
        'comment_id'=>1
        ]);
    }
}
