<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PrefecturesSeeder::class);
      $this->call(brandsSeeder::class);
      $this->call(BodytypeSeeder::class);
      $this->call(RegionSeeder::class);
    }
}
