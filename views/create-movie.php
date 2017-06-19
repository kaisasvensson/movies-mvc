<?php require 'header.php'; ?>

        <div class="container text-center">
            <form id="create-movie-view" method="POST" action="/create-movie">
                <div class="form-group myForm">
                    <label>Movie Title</label><br>
                    <input type="text" name="title" placeholder="Title"><br>
                    <label>Year</label><br>
                    <input type="text" name="year" placeholder="Year"><br>
                    <label>Director</label><br>
                    <input type="text" name="director" placeholder="Director"><br>
                </div>
                <p style="display:none;" id="error-message">Fill in the form!</p>
                <button type="submit" name="submit" class="btn btn-default mybutton">Add Movie</button>
            </form>
        </div>
    </div>


<?php require 'footer.php'; ?>