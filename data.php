<?php

declare(strict_types=1);

function getNames(array $smoothies): array
{
    $names = [];
    foreach ($smoothies as $smoothie) {
        $names[] = $smoothie['name'];
    }
    return $names;
}


$smoothies =
    [
        [
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
            'name' => 'mango smoothie',
            'img' => '/img/bild.png',
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
            'name' => 'pineapple smoothie',
            'img' => '/img/bild.png',
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
