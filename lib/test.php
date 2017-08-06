<?php
use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
 
$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key' => '6ee39af738dbc8a9c4ee6ba9ae95b5d7c64836cf']);
 
$sparky->setOptions(['async' => false]);
$results = $sparky->transmissions->post([
  'options' => [
    'sandbox' => true
  ],
  'content' => [
    'from' => 'testing@sparkpostbox.com',
    'subject' => 'Oh hey!',
    'html' => '<html><body><p>Testing SparkPost - the world\'s most awesomest email service!</p></body></html>'
  ],
  'recipients' => [
    ['address' => ['email'=>'maxpen652@gmail.com']]
  ]
]);
?>
