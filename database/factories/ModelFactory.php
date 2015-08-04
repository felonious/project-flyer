<?php

// Tinker Notes
// $flyer = factory('App\Flyer')->create();
// $flyer->photos()->create(['photo' => 'foo.jpg']);
// App\Flyer::with('photos')->first();
// $flyer->delete(); // in cascade

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Flyer::class, function ($faker) {
    return [
        'street' 		=> $faker->streetAddress,
        'city' 			=> $faker->city,
        'zip' 			=> $faker->postCode,
        'state' 		=> $faker->state,
        'country' 		=> $faker->country,
        'price' 		=> $faker->numberBetween(10000, 5000000),
        'description' 	=> $faker->paragraphs(3, true)
    ];
});
