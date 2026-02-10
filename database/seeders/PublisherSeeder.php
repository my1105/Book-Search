<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::create([
            'name' => '新潮社',
            'name_kana' => 'シンチョウシャ',
        ]);

        Publisher::create([
            'name' => '岩波書店',
            'name_kana' => 'イワナミショテン',
        ]);

        Publisher::create([
            'name' => '講談社',
            'name_kana' => 'コウダンシャ',
        ]);

        Publisher::create([
            'name' => '文藝春秋',
            'name_kana' => 'ブンゲイシュンジュウ',
        ]);

        Publisher::create([
            'name' => '小学館',
            'name_kana' => 'ショウガクカン',
        ]);

        Publisher::create([
            'name' => '集英社',
            'name_kana' => 'シュウエイシャ',
        ]);
    }
}
