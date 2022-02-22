<?php include("security.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/topbar.php"); ?>
<?php include("config/dbcon.php"); ?>


<!-- container-fluid -->
<div class="container-fluid">
    
    <!-- Faculty -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Faculty
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addAdminFaculty">
                    ADD Faculty
                </button>
            </h6>
        </div>

        <div class="card-body">

            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                echo '<h2 class="bg-primary text-white">' . $_SESSION['success'] . '</h2>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2  class="bg-danger text-white">' . $_SESSION['status'] . '</h2>';
                unset($_SESSION['status']);
            }
            ?>

            <div class="table-responsive">

                <?php
                $query = "SELECT * FROM faculty";
                $result = mysqli_query($con, $query);
                ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['design']; ?></td>
                            <td><?php echo $row['descrip']; ?></td>
                            <td><a href="<?php echo $row['link']; ?>" target="_blank">Link</a></td>
                            <td><img src="upload/faculty/<?php echo $row['images'];?>" width="65px" alt="images"></td>
                            <td>
                                <form action="faculty_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                 </form>
                            </td>
                            <td>
                                <form action="faculty_code.php" method="post">
                                    <input type="hidden" name="delete_image" value="<?php echo $row['images']; ?>">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- End Faculty -->

    <!-- Modal -->
    <div class="modal fade" id="addAdminFaculty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faculties</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="faculty_code.php" method="POST" enctype="multipart/form-data">
                
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="faculty_name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label>Designation</label>
                            <input type="text" name="faculty_designation" class="form-control" placeholder="Enter Designation" required>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <!-- <input type="text" name="faculty_description" class="form-control" placeholder="Enter Description" required> -->
                            <textarea name="faculty_description" rows="5" class="form-control" placeholder="Enter Description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Link</label>
                            <input type="text" name="faculty_link" class="form-control" placeholder="Enter Link" required>
                        </div>
                        <div class="mb-3">
                            <label>Upload Image</label>
                            <input type="file" name="faculty_image" id="faculty_image" class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="faculty_save" class="btn btn-primary">Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>
<!--End container-fluid -->

<?php include("includes/footer.php") ?>
<?php include("includes/logoutmodal.php") ?>
<?php include("includes/scripts.php") ?>