<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sybjects')->insert([//
        'name'=>'経営学',
        'pofesser_name'=>'柳田太郎',
        'summary'=>'講義内容',
        'evaluation'=>'評価基準
                        評価A+（90点以上）：	
                        数値評価で９０点以上　
                        評価A（89～80点）：	
                        数値評価で８０点以上９０点未満
                        評価B（79～70点）：	
                        数値評価で７０点以上８０点未満
                        評価C（69～60点）：	
                        数値評価で６０点以上７０点未満
                        評価F（59点以下）：	
                        数値評価で６０点未満　
                        評価方法
                        配分（合計100%）	
                        中間発表・最終発表を前提として、以下の配分で評価する。
                        授業内レポート（３０％）、作品（２０％）、試験（５０％）　
                        ',
        'test'=>'sylldocument.GetElementById を基本に、要素の取得と書き換えを行う。
第三講目',
            'cadegory'=>'3年春学期',
            'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at'=> new DateTime(),
        ]);
    }
}
