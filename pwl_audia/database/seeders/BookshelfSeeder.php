<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bookshelf;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert(
            [
                [
                    'code' => '620',
                    'name' => 'Engineering',
                ],
                [
                    'code' => '621',
                    'name' => 'Mechanical',
                ],
                [
                    'code' => '622',
                    'name' => 'Topographical',
                ]
            ]
        );
    }
}
