<?php require 'header.php'; ?>

        <div class="container text-center">
            <form method="POST" action="/update-movie">
                <div class="form-group myForm">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <label>Update Movie Title</label><br>
                    <input type="text" name="title" value="<?php echo $movieId['title'] ?>"><br>
                    <label>Update Year</label><br>
                        <input type="text" name="year" value="<?php echo $movieId['year'] ?>"><br>
                    <label>Update Director</label><br>
                    <input type="text" name="director" value="<?php echo $movieId['director'] ?>"><br>
                </div>
                <button type="submit" class="btn btn-default mybutton">Update Movie</button>
            </form>
        </div>
    </div>

    <?php require 'footer.php'; ?>