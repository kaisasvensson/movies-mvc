<?php

namespace views\index;
/* @var $movies */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVC</title>

    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- style.css -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="text-center">
            <h1 class="heading">MOVIES</h1>
            <hr class="small">
        </div>

        <div class="container text-center">
        <h1>UPDATE MOVIE</h1>
            <form method="POST" action="/update">
                <div class="form-group myForm">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label>Movie Title</label><br>
                    <input type="text" name="title" value="<?php echo $movieId['title'] ?>"><br>
                    <label>Year</label><br>
                    <input type="text" name="year" value="<?php echo $movieId['year'] ?>"><br>
                    <label>Director</label><br>
                    <input type="text" name="director" value="<?php echo $movieId['director'] ?>"><br>
                </div>
                <button type="submit" class="btn btn-default mybutton">Update Movie</button>
            </form>
        </div>
    </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>

</body>

</html>
