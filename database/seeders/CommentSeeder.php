<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('comments')->insert([//
        'user_id'=>1,
        'body'=>'testです',
        'subject_id'=>1,
        'stars'=>3,
            'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> new DateTime(),
        ]);
    }
}
