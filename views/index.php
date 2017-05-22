<?php
require 'header.php';
?>

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
                                        <a class="btn btn-default mybutton" href="/update-movie?id=<?= $value['id'] ?>" role='button'>Update</a>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <a class="btn btn-default mybutton" href="/create-movie?">Add Movie</a>
        </div>

<?php require 'footer.php'; ?>
