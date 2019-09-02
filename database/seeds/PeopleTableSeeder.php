<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@yamada.jp',
            'age' => 14,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ta',
            'mail' => 'ta@yamada.jp',
            'age' => 22,
        ];
        DB::table('people')->insert($param);
    }
}
