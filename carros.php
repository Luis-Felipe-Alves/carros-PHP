<?php

$carros = [
    '991 GT3 RS' => [
        'marca' => 'Porsche',
        'tipo' => 'coupé'
    ],

    'F-355' => [
        'marca' => 'Ferrari',
        'tipo' => 'coupé'
    ],

    '296 GTB' => [
        'marca' => 'Ferrari',
        'tipo' => 'coupé'
    ],

    'RS-6' => [
        'marca' => 'Audi',
        'tipo' => 'wagon'
    ],

    'M3 E-46' => [
        'marca' => 'BWM',
        'tipo' => 'coupé'
    ],

    'E-63 AMG' => [
        'marca' => 'Mercedes',
        'tipo' => 'sedan'
    ]
];

foreach($carros as $modelo => $carro){
    echo "Temos o $carro[tipo] $modelo, da $carro[marca]." . PHP_EOL;
}