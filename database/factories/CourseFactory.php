<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Material;
use App\RoboticsKit;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $materialId = Material::query()->inRandomOrder()->value('id');
    $roboticsKitId = RoboticsKit::query()
        ->inRandomOrder()
        ->value('robotics_kit_id');

    if ($materialId === null) {
        throw new RuntimeException(
            'A material is required before courses can be generated.'
        );
    }

    if ($roboticsKitId === null) {
        throw new RuntimeException(
            'A robotics kit is required before courses can be generated.'
        );
    }

    return [
        'course_key' => $faker->unique()->uuid,
        'title' => $faker->sentence(4),
        'cover' => $faker->imageUrl(640, 480, 'technics'),
        'content' => $faker->paragraphs(3, true),
        'material_id' => $materialId,
        'robotics_kit_id' => $roboticsKitId,
    ];
});
