<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the users provided by the instructions.
     *
     * @return void
     */
    public function run()
    {
        $beginnerGroupId = DB::table('groups')
            ->where('name', 'Beginner')
            ->value('group_id');

        if ($beginnerGroupId === null) {
            throw new \RuntimeException(
                'The Beginner group must exist before users can be seeded.'
            );
        }

        $users = [
            [
                'name' => 'Admon',
                'email' => 'admon@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Administrative',
                'group_id' => null,
            ],
            [
                'name' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Teacher',
                'group_id' => null,
            ],
            [
                'name' => 'Student',
                'email' => 'student@robotics.com',
                'password' => Hash::make('Adm@2022'),
                'role' => 'Student',
                'group_id' => $beginnerGroupId,
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
