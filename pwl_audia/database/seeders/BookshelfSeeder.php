<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert(
            [
                [
                    'code' => '101',
                    'name' => 'buku cerita'
                ],
                [
                    'code' => '102',
                    'name' => 'buku pelajaran'
                ]
            ]
        );
    }
}
