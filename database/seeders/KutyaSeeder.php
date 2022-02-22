<?php

namespace Database\Seeders;

use App\Models\Kutya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KutyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kutya::factory(15)->create();
    }
}
