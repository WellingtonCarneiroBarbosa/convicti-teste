<?php

return [
    'default'    => 'BRL',

    'currencies' => [
        'BRL' => [
            'name'                => 'Real',
            'symbol'              => 'R$',
            'symbol_first'        => true,
            'thousands_separator' => '.',
            'decimal_separator'   => ',',
            'precision'           => 2,
            'subunit'             => 100,
        ],
        'USD' => [
            'name'                => 'US Dollar',
            'symbol'              => '$',
            'symbol_first'        => true,
            'thousands_separator' => ',',
            'decimal_separator'   => '.',
            'precision'           => 2,
            'subunit'             => 100,
        ],
        'EUR' => [
            'name'                => 'Euro',
            'symbol'              => '€',
            'symbol_first'        => false,
            'thousands_separator' => '.',
            'decimal_separator'   => ',',
            'precision'           => 2,
            'subunit'             => 100,
        ],
    ],
];
