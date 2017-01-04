<?php

require __DIR__.'/vendor/autoload.php';

use Guzzle\Http\Client;

// create our http client (Guzzle)
$client = new Client('http://localhost:8000', array(
//$client = new Client('http://localhost/rest/web', array(
    'request.options' => array(
        'exceptions' => false,
    )
));

/**/ // 5
//$request = $client->post('/api/programmers');
/*/*/
/**/ // 6
$nickname = 'ObjectOrienter'.rand(0, 999);
$data = array(
    'nickname' => $nickname,
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);

$request = $client->post('/api/programmers', null, json_encode($data));
/*/*/
/**/ // 7

//$request = $client->get('/api/programmers/'.$nickname);
//$request = $client->get('/api/programmers/ObjectOrienter486');
$request = $client->get('/api/programmers/ObjectOrienter86');

/*/*/

$response = $request->send();
echo $response;
echo "\n\n";
