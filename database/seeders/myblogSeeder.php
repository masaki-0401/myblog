<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class myblogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('myblogs')->insert([
        [
            'title' => '初めての投稿',
            'content' => '初めてでうまく表示されているかな？',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'title' => '２回目の投稿',
            'content' => '２回目の投稿です',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'title' => '３回目の投稿',
            'content' => '３回目の投稿',
        ],
        [
            'title' => '４回目の投稿',
            'content' => '４回目の投稿',
        ],
        [
            'title' => '５回目の投稿',
            'content' => '５回目の投稿',
        ],
    ]);
    }
}
