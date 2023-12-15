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
                // [
                //    'title' => 'Geografi',
                //    'author' => 'Lian',
                //    'year'=> '2013',
                //    'publisher' => 'Gramedia',
                //    'city' => 'Cianjur',
                //    'cover' => 'geografi.jpg',
                //    'quantity' => '200',
                //    'bookshelf_id' => '3',
                // ],
            ]
        );
    }
}