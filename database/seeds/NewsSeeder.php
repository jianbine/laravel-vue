<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i=0;$i < 50;$i++){
//            DB::table('news')->insert([
//                'title' => str_random(10),
//                'content' => str_random(10),
//                'is_recommend' => 0,
//                'created_at' => date('Y-m-d H:i:s',time()),
//                'updated_at' => date('Y-m-d H:i:s',time()),
//            ]);
//        }
        factory(\App\News::class,20)->create();
    }
}
