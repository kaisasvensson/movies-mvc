<?php require 'header.php'; ?>

    <div class="container text-center">
        <form id="create-director-view" method="POST" action="/create-director">
            <div class="form-group myForm">
                <label>Add more information about director</label><br>
                <select name="movies_id" id="movies_id" style="margin:20px; width: 350px; padding: 3px;">
                    <option value="">Choose director</option>
                        <?php foreach ($allMovies as $director) { ?>
                            <option value="<?= $director['id'] ?>"><?= $director['director']?></option>
                        <?php } ?>
                </select><br>
               <!--<input type="text" name="name" placeholder="Name"><br>-->
                <label>Image</label><br>
                <input type="text" name="img_url" placeholder="Paste image url here"><br>
                <label>About</label><br>
                <input type="text" name="about" placeholder="About""><br>
            </div>
            <button type="submit" class="btn btn-default mybutton add">Add Director</button>
        </form>
    </div>
    </div>

<?php require 'footer.php'; ?>