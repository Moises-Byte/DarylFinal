<?php

namespace Database\Seeders;

use Database\Factories\ChefFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Chef extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChefFactory::factory(10)->create();
    }
}
