<?php

$name = 'Laracasts';
$cost = 15;

$business = [
    'name' => $name,
    'cost' => $cost,
    'isActive' => true,
    'categories' => ['education', 'entertainment','community', 'learning']

];

$business['name']; // 'Laracasts'

// if($business['cost'] > 90) {
//     echo 'Not intrested';
// } else {
//     echo 'Affordable';
// }

// foreach($business['categories'] as $category) {
//     echo $category . "<br>";
// }   


function register($user){
    //create theuser record in the db
    //log the in
    // send a welcome email
    // redirect them to the dashboard
}

require "index.view.php";