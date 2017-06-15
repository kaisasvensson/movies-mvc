<?php require 'header.php'; ?>

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
                                        <div class="row-fluid summary">
                                            <div class="span1">
                                                <span class="glyphicon glyphicon-info-sign" data-toggle="collapse" data-target="#intro"></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-default mybutton" href="/delete?id=<?= $value['id'] ?>" role='button'>Delete</a>
                                        <a class="btn btn-default mybutton" href="/update-movie?id=<?= $value['id'] ?>" role='button'>Update</a>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>



                    <div class="row">
                        <div id="intro" class="collapse">
                            <div class="col-xs-3 col-md-4">
                                    <img class="img-circle director-img" src="<?php echo $movieId['img_url'] ?>" alt="">
                            </div>
                            <div style="background-color: white; border-radius: 10px; margin: 40px; padding: 20px; height: 300px;">
                            <h3>test</h3><br>
                            <p>har varit standard ända sedan 1500-talet, när en okänd boksättare
                                tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok.
                                Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk
                                typografi utan större förändringar. Det blev allmänt känt på</p>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
        <div class="container text-center">
            <a class="btn btn-default mybutton add" href="/create-movie?">Add Movie</a>
        </div>

<?php require 'footer.php'; ?>


