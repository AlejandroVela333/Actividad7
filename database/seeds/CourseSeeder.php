<?php

use App\Course;
use App\Material;
use App\RoboticsKit;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Seed the courses table.
     *
     * @return void
     */
    public function run()
    {
        if (! Material::query()->exists()) {
            throw new \RuntimeException(
                'Materials must exist before generating courses.'
            );
        }

        if (! RoboticsKit::query()->exists()) {
            throw new \RuntimeException(
                'Robotics kits must be seeded before generating courses.'
            );
        }

        factory(Course::class, 100)->create();
    }
}
