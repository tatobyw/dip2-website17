<?php include("security.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/topbar.php"); ?>
<?php include("config/dbcon.php"); ?>


<!-- container-fluid -->
<div class="container-fluid">

    <!-- Edit Faculty -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Admin Edit Faculty </h6>
        </div>

        <div class="card-body">
            <?php
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM faculty WHERE id='$id' ";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
            }
            ?>
            <form action="faculty_code.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" class="form-control">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="faculty_name" value="<?php echo $row['name']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Designation</label>
                        <input type="text" name="faculty_designation" value="<?php echo $row['design']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <!-- <input type="text" name="faculty_description" value="<?php //echo $row['descrip']; ?>" class="form-control"> -->
                        <textarea name="faculty_description" class="form-control" cols="30" rows="5"><?php echo $row['descrip']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Link</label>
                        <input type="text" name="faculty_link" value="<?php echo $row['link']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Upload Image</label>
                        <img src="upload/faculty/<?php echo $row['images']; ?>" width="100px;" class="img-rounded">
                        <input type="hidden" name="faculty_image">
                        <input type="file" name="faculty_image" id="faculty_image" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="faculty.php" class="btn btn-danger">CANCEL</a>
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>

    </div>
    <!--End Edit Faculty -->

</div>
<!--End container-fluid -->

<?php include("includes/footer.php") ?>
<?php include("includes/logoutmodal.php") ?>
<?php include("includes/scripts.php") ?>