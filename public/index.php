<?php

use App\Database;
use App\Models\MovieModel;


//roten i projektet

// Sökväg till grundmappen i projektet konstant som pekar till mappen där filen ligger i
$baseDir = __DIR__ . '/..';

// Ladda in Composers autoload-fil -alla klasser laddas in automatiskt
require $baseDir . '/vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir . '/config/config.php';

// Normalisera url-sökvägar
$path = function($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
    return $uri;
};

$dsn = "mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'] . ";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['db_username'], $config['db_password'], $config['options']);
$db = new Database($pdo);

// Routing

//$controller = new Controller($baseDir);
$url = $path($_SERVER['REQUEST_URI']);
switch ($url) {
    case '/':
        //$controller->index();
        $movieModel = new MovieModel($db);
        $allMovies = $movieModel->getAll();

        require $baseDir . '/views/index.php';
        break;

    case '/create-movie':

        require $baseDir . '/views/create-movie.php';

        break;
    case '/create':
        $movieModel = new MovieModel($db);

       $newMovie = $movieModel->create([
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'director' => $_POST['director']
        ]);

        header('Location: /?id=' . $newMovie);
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}

