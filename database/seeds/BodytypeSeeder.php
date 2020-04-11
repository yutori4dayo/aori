<?php

use Illuminate\Database\Seeder;

class BodytypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('body_types')->insert([
          [  'name' => 'セダン'],
          [  'name' => '軽自動車'],
          [  'name' => 'コンパクトカー'],
          [  'name' => 'ミニバン'],
          [  'name' => 'ステーションワゴン'],
          [ 'name' => 'SUV'],
          [  'name' => 'クーペ'],
          [ 'name' => 'ハッチバック'],
          [  'name' => 'オープンカー'],
      ]);
    }
}
