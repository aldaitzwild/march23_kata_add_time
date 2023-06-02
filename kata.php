<?php
/**
 * Ajouter 5 secondes à chaque heure du tableau suivant.
 * Les minutes et les heures doivent naturellement évoluer.
 * 
 */

 require 'Time.php';

 $times = [
    ['hours' => 12, 'minutes'=> 34, 'seconds' => 45],
    ['hours' => 8, 'minutes'=> 26, 'seconds' => 59],
    ['hours' => 17, 'minutes'=> 38, 'seconds' => 58],
    ['hours' => 21, 'minutes'=> 59, 'seconds' => 28],
    ['hours' => 23, 'minutes'=> 59, 'seconds' => 59],
 ];

 foreach($times as $time) {
    $timeHandler = new Time($time);
    $timeHandler->addSeconds(5);
    $time = $timeHandler->toArray();

    echo $time['hours'] . ':' . $time['minutes'] . ':' . $time['seconds'] . PHP_EOL;
 }



