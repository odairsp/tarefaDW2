<?php

$users = [
    [
        'name' => "Jonas",
        'lastName' => 'Silva',
        'image' => 'jonas.jpg',
        'genre' => 'M',
        'cpf' => "12348741025",
        'rg' => "546896588",
        'email' => 'jonas@email',
        'address' =>
        [
            'street' => 'rua do lado de traz',
            'number' => '58',
            'district' => 'Jardim Olimpio',
            'city' => 'Itaperuma',
            'state' => 'BH',
            'zipCode' => '25448565'
        ]
    ],
    [
        'name' => "Marcio",
        'lastName' => 'Rezende',
        'image' => 'marcio.jpg',
        'genre' => 'M',
        'cpf' => "1234612458",
        'rg' => "635214798",
        'email' => 'marcio@email',
        'address' =>
        [
            'street' => 'rua deste lado',
            'number' => '45',
            'district' => 'Jardim Morro alto',
            'city' => 'Itabaiana',
            'state' => 'MG',
            'zipCode' => '45698321'
        ]
    ],
    [
        'name' => "Epaminondas",
        'lastName' => 'Celestino',
        'image' => 'epaminondas.jpg',
        'genre' => 'M',
        'cpf' => "12343685478",
        'rg' => "286541357",
        'email' => 'epaminondas@email',
        'address' =>
        [
            'street' => 'rua do buraco',
            'number' => '45',
            'district' => 'Jardim Murcho',
            'city' => 'Rio Grande',
            'state' => 'PA',
            'zipCode' => '45887626'
        ]
    ],
    [
        'name' => "Maria",
        'lastName' => 'Rita',
        'image' => 'maria.jpg',
        'genre' => 'F',
        'cpf' => "12342874569",
        'rg' => "254178658",
        'email' => 'maria@email',
        'address' =>
        [
            'street' => 'rua de terra',
            'number' => '856',
            'district' => 'Jardim Pedra quebrada',
            'city' => 'Queroluz',
            'state' => 'ES',
            'zipCode' => '56334875'
        ]
    ],
    [
        'name' => "Pedro",
        'lastName' => 'Paulo',
        'image' => 'pedro.jpg',
        'genre' => 'M',
        'cpf' => "54685321458",
        'rg' => "123467893",
        'email' => 'pedro@email',
        'address' =>
        [
            'street' => 'rua sem luz',
            'number' => '24',
            'district' => 'Jardim do brejo',
            'city' => 'Sao peruz',
            'state' => 'AC',
            'zipCode' => '45226183'
        ]
    ]
];

function exists(string $user): bool{
   global $users;
    foreach ($users  as $value) {
        if ($value['email'] === $user){
            return true; 
        }
    }
    return false;
}

function getUser(string $user){
    global $users;
    foreach ($users as $value) {
        if (array_search($user, $value) !== false){
            return $value; 
        }
    }
}
