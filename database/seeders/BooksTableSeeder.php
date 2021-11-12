<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'title' => '愛と幻想のファシズム',
            'author' => '村上龍',
            'Synopsis' => 'あらすじ'
        ];
        DB::Table('books')->insert($params);

    }
}


