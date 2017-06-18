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
                            <?php foreach ($movieData as $value): ?>
                                <tr>
                                    <td><?= $value['movie']['id'] ?></td>
                                    <td><?= $value['movie']['title'] ?></td>
                                    <td><?= $value['movie']['year'] ?></td>
                                    <td><?= $value['movie']['director'] ?></td>
                                    <td>
                                       <div class="row-fluid summary">
                                            <div class="span1">
                                                <span class="glyphicon glyphicon-info-sign" data-toggle="collapse" data-target="#intro"<?= $value['movie']['id']?>></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-default mybutton" href="/delete?id=<?= $value['movie']['id'] ?>" role='button'>Delete</a>
                                        <a class="btn btn-default mybutton" href="/update-movie?id=<?= $value['movie']['id'] ?>" role='button'>Update</a>
                                </tr>
                            <tr>
                            <?php foreach ($value['director'] as $director) { ?>
                                <!-- gör en loop, använd $value['directors'] as $director -->
                                <div class="row">
                                    <div id="intro" class="collapse">
                                        <div class="col-xs-3 col-md-4">
                                            <img class="img-circle director-img" src="<?= $director['img_url'] ?>" alt="">
                                        </div>
                                        <div style="background-color: white; border-radius: 10px; margin: 40px; padding: 20px; height: 300px;">
                                            <h3><?= $director['director'] ?></h3><br>
                                            <p><?= $director['about_director'] ?></p>
                                        </div>

                                    </div>
                                </div>

                            <?php } ?>
                            </tr>

                        </tbody>
                        <?php endforeach; ?>
                    </table>



                </div>
            </div>
        </div>


        <div class="container text-center">
            <a class="btn btn-default mybutton add" href="/create-movie?">Add Movie</a>
        </div>

<?php require 'footer.php'; ?>


