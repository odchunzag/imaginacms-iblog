<?php

namespace Modules\Iblog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Iblog\Database\Seeders\RoleTableSeeder;

class IblogDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(IblogModuleTableSeeder::class);
    $this->call(RoleTableSeeder::class);
    $this->call(SlugCheckerTableSeeder::class);
    $this->call(LayoutsBlogTableSeeder::class);
    $this->call(MoveStatusToPostsTranslationsTableSeeder::class);
  }
}
