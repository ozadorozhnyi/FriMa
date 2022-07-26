<?php

return [
    'seed' => [
        'contracts' => 5,
        'locations' => [
            ['name' => 'Портленд (Орегон)', 'timezone' => 'America/New_York'],
            ['name' => 'Торонто', 'timezone' => 'America/Toronto'],
            ['name' => 'Варшава', 'timezone' => 'Europe/Warsaw'],
            ['name' => 'Валенсия', 'timezone' => 'Europe/Madrid'],
            ['name' => 'Шанхай', 'timezone' => 'Asia/Shanghai'],
        ],
        'building' => [
            'range' => [
                'min' => 1,
                'max' => 5,
            ],
            'temperature' => [
                'min' => -18,
                'max' => 18,
            ],
            'blocks' => [
                'range' => [
                    'min' => 1,
                    'max' => 5,
                ],
                'price' => [
                    'min' => 3,
                    'max' => 99,
                ],
            ],
        ],
    ],
];
