<?php

use Illuminate\Database\Seeder;

class brandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->insert([
          [  'name' => 'トヨタ'],
          [  'name' => 'レクサス'],
          [  'name' => 'ニッサン'],
          [  'name' => 'ホンダ'],
          [  'name' => 'マツダ'],
          [  'name' => 'スバル'],
          [  'name' => '三菱'],
          [  'name' => 'スズキ'],
          [  'name' => 'ダイハツ'],
          [  'name' => 'BMW'],
          [  'name' => 'アウディ'],
          [  'name' => 'ベンツ'],
          [  'name' => 'フォルクスワーゲン'],
          [  'name' => 'MINI'],
          [  'name' => 'シエトロン'],
          [  'name' => 'ジープ'],
          [  'name' => 'ジャガー'],
          [  'name' => 'ルノー'],
          [  'name' => 'シボレー'],
          [  'name' => 'フィアット・アバルト'],
          [  'name' => 'ランドローバー'],
          [  'name' => 'キャデラック'],
          [  'name' => 'プジョー'],
          [  'name' => 'ポルシェ'],
          [  'name' => 'アルファロメオ'],
          [  'name' => 'いすゞ'],
          [  'name' => '日野'],
          [  'name' => '三菱ふそう'],
      ]);
    }
}
