<?php
require __DIR__ . '/data.php';

function getRandomRecipe()
{
    $smoothies =
        [
            [
                'id' => 0,
                'name' => 'raspberry smoothie',
                'img' => '/img/raspberry-smoothie.jpg.webp',
                'recipe' => 'lorem ipsum',
                'ingredients' =>
                [
                    'fresh strawberries',
                    'banana',
                    'greek yogurt',
                    'milk',
                ]
            ],
            [
                'id' => 1,
                'name' => 'mango smoothie',
                'img' => '/img/mango-smoothie-9.jpeg',
                'recipe' => 'lorem ipsum',
                'ingredients' =>
                [
                    'fresh mango',
                    'frozen banana',
                    'yogurt',
                    'milk',
                ]
            ],
            [
                'id' => 2,
                'name' => 'pineapple smoothie',
                'img' => '/img/Pineapple.jpeg',
                'recipe' => 'lorem ipsum',
                'ingredients' =>
                [
                    'frozen pineapple',
                    'peaches',
                    'cashew yogurt',
                    'pineapple juice',
                ],
            ]
        ];
    return $smoothies[array_rand($smoothies[0])];
}
echo getRandomRecipe();
