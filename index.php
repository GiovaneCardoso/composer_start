<?php
require __DIR__ . '/vendor/autoload.php';
use SebastianBergmann\Timer\Timer;


$timer = new Timer;
$timer->start();
sleep(3);
$duration = $timer->stop();

var_dump($duration->asMilliseconds())

?>