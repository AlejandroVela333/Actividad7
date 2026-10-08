<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Seed the groups provided by the instructions.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            'Beginner',
            'Intermediate',
            'Advanced',
        ];

        foreach ($groups as $name) {
            DB::table('groups')->updateOrInsert(
                ['name' => $name],
                ['name' => $name]
            );
        }
    }
}
