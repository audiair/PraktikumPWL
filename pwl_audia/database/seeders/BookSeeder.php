<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                [
                   'title' => 'Bulan',
                   'author' => 'lala',
                   'year'=> '2020',
                   'publisher' => 'gramedia',
                   'city' => 'cianjur',
                   'cover' => 'shshsh',
                   'bookshelf_id' => '1',
                   'category_id' => '1'

                ],
                [
                   'title' => 'Kamus Bahasa Indonesia-Turkey',
                   'author' => 'lolo',
                   'year'=> '2022',
                   'publisher' => 'gramedia',
                   'city' => 'cianjur',
                   'cover' => 'shshsh',
                   'bookshelf_id' => '2',
                   'category_id' => '2'
                ]
            ]
        );
    }
}
