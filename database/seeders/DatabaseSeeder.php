<?php

namespace Database\Seeders;

use App\Models\donations;
use App\Models\Funding;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      User::factory(count:10)->create();
      Funding::create(attributes:[
        'title' => 'bantuan kemanusian',
        'desc' => 'bantuan untuk korban bencana alam',
        'image' => 'bantuan-kemanusian.jpg',
        'progres' => 0,
        'target' => 1000000,
        'user_id'=>1,
      ]);
      donations::create(attributes: [ 
        'amount'=>1000000,
        'fundings_id' => 1,
        'user_id'=>2,
    ]);
    }

}