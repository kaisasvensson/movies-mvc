<?php
use App\Controllers;
use App\Database;
use App\Models\MovieModel;
use App\Models\DirectorModel;


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

//$controller = new Controller($baseDir); kan använda oop till detta i större projekt
$url = $path($_SERVER['REQUEST_URI']);
$movieModel = new MovieModel($db);
$directorModel = new \App\Models\DirectorModel($db);
switch ($url) {

    case '/':
        $movieData = [];
        $allMovies = $movieModel->getAll();
        $movies = $movieModel->getAll();
        foreach ($movies as $movie) {
            $movieData[] = [
                'movie' => $movie,
                'director' => $movieModel->getRelatedDirectors($movie['id'])
            ];
        }
        require $baseDir . '/views/index.php';
        break;

    case '/create-movie-view':
        require $baseDir . '/views/create-movie.php';
        break;

    case '/create-movie':
        $newMovie = $movieModel->create([
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'director' => $_POST['director']
        ]);
        header('Location: /?id=' . $newMovie);
        break;

    case '/create-director-view':
        $allMovies = $movieModel->getAll();
        require $baseDir . '/views/create-director.php';
        break;

    case '/create-director':
        $directorCreate = $directorModel->create([
            'movies_id' => $_POST['movies_id'],
            /*'name' => $_POST['name'],*/
            'img_url' => $_POST['img_url'],
            'about' => $_POST['about']
        ]);
        header('Location: /?id=' . $directorCreate);
        break;

    case '/delete-movie':
        $deleteMovie = $movieModel->delete($_GET['id']);
        header('Location: /?id=' . $deleteMovie);
        break;

    case '/delete-director':
        $deleteDirector = $directorModel->delete($_GET['id']);
        header('Location: /?id' . $deleteDirector);
        break;

    case '/update-movie-view':
        $movieId = $movieModel->getById($_GET['id']);
        require $baseDir . '/views/update-movie.php';
        break;

    case '/update-movie':
        $movieUpdate = $movieModel->update($_POST['id'], [
            'title' => $_POST['title'],
            'year' => $_POST['year'],
            'director' => $_POST['director']
        ]);
        header('Location: /?id=' . $_POST['id']);
        break;

    case '/update-director-view':
        $directorId = $directorModel->getById($_GET['id']);
        require $baseDir . '/views/update-director.php';
        break;

    case '/update-director':
        $directorUpdate = $directorModel->update($_POST['id'], [
            'name' => $_POST['name'],
            'img_url' => $_POST['img_url'],
            'about' => $_POST['about']
        ]);
        header('Location: /?id=' . $directorUpdate);
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}

