<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'categoryName' => 'Cơm',
            'categoryImg' => 'https://i.imgur.com/KXDbfbn.jpg',
        ]);
        //
        DB::table('categories')->insert([
            'categoryName' => 'Mì',
            'categoryImg' => 'https://i.imgur.com/x06cTao.png',
        ]);
        //
        DB::table('categories')->insert([
            'categoryName' => 'Đồ uống',
            'categoryImg' => 'https://i.imgur.com/mBU7u0R.jpg',
        ]);
        //
        DB::table('categories')->insert([
            'categoryName' => 'Gọi thêm',
            'categoryImg' => 'https://i.imgur.com/sdnbiwe.jpg',
        ]);
        //
        DB::table('categories')->insert([
            'categoryName' => 'Hàn Quốc',
            'categoryImg' => 'https://i.imgur.com/vgFktAK.jpg',
        ]);
    }
}
