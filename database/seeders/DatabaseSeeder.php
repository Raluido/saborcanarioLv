<?php

namespace Database\Seeders;

use Database\Factories\EventFactory;
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
       $eventfactory=new EventFactory();
       $eventfactory->count(10)->create();
   }
}
