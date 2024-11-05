<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Map pages to files and their respective titles
$pages = [
    'home' => ['file' => 'index.php', 'title' => 'Dashboard'],
    'classification' => ['file' => 'classification.php', 'title' => 'Classification'],
    'aip' => ['file' => 'aip.php', 'title' => 'AIP'],
    'login' => ['file' => 'src/auth/login.php', 'title' => 'Login'],
    'register' => ['file' => 'src/auth/register.php', 'title' => 'Register'],

    // Add other pages here
];

// Include the requested file or show a 404
if (array_key_exists($page, $pages)) {
    $title = $pages[$page]['title']; // Get the title for the current page
    include $pages[$page]['file'];
} else {
    $title = '404 Not Found';
    echo "404 Not Found";
}


?>
