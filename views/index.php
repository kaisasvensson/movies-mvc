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
    <!-- app.css -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <div class="text-center">
            <h1 class="heading">MOVIES</h1>

        <hr class="small">
        </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>title</th>
                                    <th>Year</th>
                                    <th>Director</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($allMovies as $value): ?>
                                    <tr>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['title'] ?></td>
                                    <td><?= $value['year'] ?></td>
                                    <td><?= $value['director'] ?></td>
                                    <td>
                                        <a class="btn btn-default mybutton" href="/delete?id=<?= $value['id'] ?>" role='button'>Delete</a>
                                        <a class="btn btn-default mybutton" href="" role='button'>Update</a>

                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                         </table>
                    </div>
                </div>
            </div>

            <div class="container text-center">

               <form action="/create-movie"><button type="submit" name="submit" class="btn btn-default mybutton">Add Movie</button></form>
            </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>

</body>

</html>
