<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Lead::factory(10)->create();
    }
}
