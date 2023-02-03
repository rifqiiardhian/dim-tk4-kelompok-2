<?php
    // UNCOMMENT THE CODE BELOW (LN 4-19) IF YOU ARE USING XAMPP
    // (e.g. full path (save the project on the htdocs) -> D:\xampp\htdocs\dim-tk4-kelompok-2)
    $loc = "/dim-tk4-kelompok-2";

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $loc.'/' :
            require "views/home.php";
            break;
        case $loc.'/about' :
            require "views/about.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }

    // MACOS
    // COMMENT THE CODE BELOW (LN 25-38) IF YOU ARE USING XAMPP
    // $request = $_SERVER['REQUEST_URI'];

    // switch ($request) {
    //     case '/' :
    //         require "views/home.php";
    //         break;
    //     case '/about' :
    //         require "views/about.php";
    //         break;
    //     default:
    //         http_response_code(404);
    //         echo "404";
    //         break;
    // }
?>