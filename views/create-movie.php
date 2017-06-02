<?php require 'header.php'; ?>

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
                <button type="submit" name="submit" class="btn btn-default mybutton">Add Movie</button>
            </form>
        </div>
    </div>


<?php require 'footer.php'; ?>