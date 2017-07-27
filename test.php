<?php

require_once "vendor/autoload.php";

//$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('783e8440', 'Spa9alGs'));     

$basic  = new \Nexmo\Client\Credentials\Basic('783e8440', 'Spa9alGs');
$keypair = new \Nexmo\Client\Credentials\Keypair(file_get_contents(__DIR__ . '/application.key'), '9a2ffa38-5fb3-4e49-aa30-6f34376b7917');

$client = new \Nexmo\Client(new \Nexmo\Client\Credentials\Container($basic, $keypair));

$client->calls()->create([
    'to' => [[
        'type' => 'phone',
        'number' => '351967086807' //cliente
    ]],
    'from' => [
        'type' => 'phone',
        'number' => '351933086554$'
    ],
    'answer_url' => ['https://raw.githubusercontent.com/ipereira-egoi/teste/master/ncco2.json'], // com numero da empresa
    'event_url' => ['https://hookbin.com/bin/Kb8Plj1x'],
]);
