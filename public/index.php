<?php
use App\Controllers;
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
$movieModel = new MovieModel($db);

// Routing

//$controller = new Controller($baseDir); kan använda oop till detta i större projekt
$url = $path($_SERVER['REQUEST_URI']);
switch ($url) {
    case '/':
        $allMovies = $movieModel->getAll();
        require $baseDir . '/views/index.php';
        break;

    case '/create-movie':
        require $baseDir . '/views/create-movie.php';
        break;
    case '/create':

        $newMovie = $movieModel->create([
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'director' => $_POST['director']
        ]);

        header('Location: /?id=' . $newMovie);
        break;

    case '/delete':
        $deleteMovie = $movieModel->delete($_GET['id']);
        header('Location: /?id=' . $deleteMovie);
    break;

    case '/update-movie':
        $movieId = $movieModel->getById($_GET['id']);
        require $baseDir . '/views/update-movie.php';
        break;
    case '/update':
        $updateMovie = $movieModel->update($_POST['id'], [
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'director' => $_POST['director']
        ]);
        header('Location: /?id=' . $_POST['id']);
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}

