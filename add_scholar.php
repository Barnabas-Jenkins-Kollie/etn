<?php
include 'include/nav.php';
require_once("connection/dbcon.php");
?>

<div class="container">
    <h1 class="text-center">Add scholar</h1>
    <div class="col">
        <form class=" col-sm-12 col-md-12" action="upload.php" method="post" enctype="multipart/form-data">
            <input class="form-control mt-4" type="text" name="fullname" placeholder="full name"><br>
            <input class="form-control mt-4" type="text" name="class" placeholder="Class"><br>
            <label for="img" class=" form-label">Scholar picture</label>
            <input class="form-control mt-2" type="file" name="image" id="img" value="upload image"><br>
            <div class="mb-3">
                <label for="paragraph" class="form-label">Scholar Bio</label>
                <textarea class="form-control" id="paragraph" name="scholar_bio" rows="3"></textarea>
            </div>
            <input class="btn btn-lg btn-block btn-danger    col-md-12" type="submit" value="Upload" name="submit">
        </form>
        </divcla>
    </div>
    <?php
    include 'include/footer.php';
    ?>