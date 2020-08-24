<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
        $sentence = $faker->sentence();

        //随机取一个月以内的时间
        $updated_at = $faker->dateTimeThisMonth();

        $created_at = $faker->dateTimeThisMonth($updated_at);

        return [
            'title' =>   $sentence,
            'body'  =>   $faker->text(),
            //后面教程中的slug在此处直接生成
            'slug'  =>   trim($sentence,'.'),
            'excerpt' => $sentence,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];

});
