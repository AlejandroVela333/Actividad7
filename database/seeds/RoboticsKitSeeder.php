<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Seed the robotics_kits table.
     *
     * @return void
     */
    public function run()
    {
        $kits = [
            'StarterKit',
            'Educational Robotics Kit',
            'Kits',
        ];

        foreach ($kits as $name) {
            DB::table('robotics_kits')->updateOrInsert(
                ['name' => $name],
                ['name' => $name]
            );
        }
    }
}
