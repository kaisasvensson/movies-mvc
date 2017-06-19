<?php require 'header.php'; ?>

    <div class="container text-center">
        <form method="POST" action="/update-director">
            <div class="form-group myForm">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <label>Update Name</label><br>
                <input type="text" name="name" value="<?php echo $director['name'] ?>"><br>
                <label>Update Image</label><br>
                <input type="text" name="img_url" value="<?php echo $director['img_url'] ?>"><br>
                <label>Update Description/about</label><br>
                <input type="text" name="about" value="<?php echo $director['about'] ?>"><br>
            </div>
            <button type="submit" class="btn btn-default mybutton">Update Director</button>
        </form>
    </div>
    </div>

<?php require 'footer.php'; ?>