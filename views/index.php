<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="text-center">
                <tr>
                    <th>title</th>
                    <th>Year</th>
                    <th>Director</th>
                    <th>
                    </th>
                </tr>
                </thead>

                <tbody>
                    <?php foreach ($movieData as $value): ?>
                    <tr>
                        <td><?= $value['movie']['title'] ?></td>
                        <td><?= $value['movie']['year'] ?></td>
                        <td>
                            <a style="color:grey; font-weight: bold;" data-toggle="modal" data-target="#myModal<?= $value['movie']['id'] ?>"><?= $value['movie']['director'] ?></a>
                        </td>

                        <td>
                            <a class="btn btn-default mybutton" href="/create-director-view?id=<?= $value['movie']['id'] ?>"
                               role='button'>Add more info</a>
                            <a class="btn btn-default mybutton" href="/delete-movie?id=<?= $value['movie']['id'] ?>"
                            role='button'>Delete</a>
                            <a class="btn btn-default mybutton" href="/update-movie-view?id=<?= $value['movie']['id'] ?>"
                            role='button'>Update</a>

                        </td>
                    </tr>

                    <tr>
                        <div class="container">
                            <div class="modal fade" id="myModal<?= $value['movie']['id'] ?>" role="dialog">
                                <div class="modal-dialog">
                                    <?php foreach ($value['director'] as $director) { ?>
                                        <div class="modal-content"  style="border-radius: 0;">
                                            <div class="text-center">
                                                <h2 class="modal-title" style="margin: 20px;"><?= $director['name'] ?></h2>
                                                <img src="<?= $director['img_url'] ?>" alt="director"/>
                                            </div>
                                            <div class="modal-body">
                                                <p class="lead" style="color:dimgrey;font-size: 18px; margin: 20px;"><?= $director['about'] ?></p>
                                            </div>
                                            <div class="text-center" style="margin: 20px;">
                                                <a type="button" class="btn btn-default" href="/update-director-view?id=<?= $director['id'] ?>">Update</a>
                                                <a type="button" class="btn btn-default" href="/delete-director?id=<?= $director['id'] ?>" >Delete</a>
                                                <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
        <div class="container text-center">
            <a class="btn btn-default mybutton add" href="/create-movie-view?">Add Movie</a>
      <!--      <a class="btn btn-default mybutton add" href="/create-director-view?id=<?/*= $value['movie']['id'] */?>"
               role='button'>Add director info</a>-->
        </div>
</div>


<?php require 'footer.php'; ?>
