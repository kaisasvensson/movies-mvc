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

    <div class="text-content">
       <p> Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet,<br>
           när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok. <br>
           Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar. </p>
    </div>

            <form method="POST" action="create">
                <div class="form-group myForm">
                    <label>Movie Title</label><br>
                    <input type="text" name="title" placeholder="Title"><br>
                    <label>Year</label><br>
                    <input type="text" name="year" placeholder="Year"><br>
                    <label>Director</label><br>
                    <input type="text" name="director" placeholder="Director"><br>
                </div>
                <button type="submit" name="submit" class="btn btn-default mybutton">Add Movie</button>
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
