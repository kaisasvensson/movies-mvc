<?php
namespace views\index;
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
            <form method="POST" action="/create">
                <div class="form-group myForm">
                    <label>Movie Title</label><br>
                    <input type="text" name="title" placeholder="Title"><br>
                    <label>Year</label><br>
                    <input type="text" name="year" placeholder="Year"><br>
                    <label>Director</label><br>
                    <input type="text" name="director" placeholder="Director"><br>
                </div>
                <a class="btn btn-default mybutton" type="submit" role='button'>Add Movie</a>
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
