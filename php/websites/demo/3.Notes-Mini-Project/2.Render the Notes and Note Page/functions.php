<?php
function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

// dd($_SERVER);

// echo $_SERVER['REQUEST_URI'];

// if($_SERVER['REQUEST_URI'] === '/'){
//     echo "bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium";
// } else {
//     echo "rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white";
// }

// echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white';
function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}
