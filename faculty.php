
<?php include('admin/config/dbcon.php'); ?>

<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/headertop.php"); ?>

<div class="container shadow mt-3 my-4">

    <div class="container py-3">

        <div class="row">
            <div class="col-md-12">
                <div class="card text-center py-2 shadow">
                    <div class="card-body">
                        <h4 class="card-title">คณะวิชา/แผนกวิชา</h4>
                        <div class="underline mx-auto mb-2"></div>
                    </div>
                    <span class="border border-warning"></span>
                    <span class="border border-warning"></span>
                    <span class="border border-warning"></span>
                </div>
            </div>
        </div>

        
    </div>

    <div class="container mb-4 pb-3">
        <div class="row">
            <?php
            $query = "SELECT * FROM faculty";
            $query_run = mysqli_query($con, $query);
            $check_faculty = mysqli_num_rows($query_run) > 0;
            if ($check_faculty) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <div class="col-md-3">
                        <?php
                        if ($row > 0) {
                        ?>
                            <div class="card shadow" style="width: 18rem;">
                                <img src="admin/upload/faculty/<?php echo $row['images']; ?>" width="120" height="300" alt="faculty image" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $row['name']; ?></h3>
                                    <div class="underline me-auto mb-2"></div>
                                    <h5 class="card-title"><?php echo $row['design']; ?></h5>
                                    <p class="card-text" style="height:100%">
                                        <?php echo $row['descrip']; ?>
                                    </p>
                                    <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">View Detail</a>
                                </div>
                                <span class="border border-warning"></span>
                                <span class="border border-warning"></span>
                                <span class="border border-warning"></span>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="card md-4 mb-3 shadow">
                                <img src="images/personal.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title">รออัพเดตชื่อ</h3>
                                    <div class="underline me-auto mb-2"></div>
                                    <h5 class="card-title">รออัพเดตตำแหน่ง</h5>
                                    <p class="card-text" style="height:100">
                                        รออัพเดตรายละเอียด
                                    </p>
                                    <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">รออัพเดตลิงค์</a>
                                </div>
                                <span class="border border-warning"></span>
                                <span class="border border-warning"></span>
                                <span class="border border-warning"></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card mb-3 shadow">
                            <img src="images/personal.jpg" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">รออัพเดตชื่อ</h3>
                                <div class="underline me-auto mb-2"></div>
                                <h5 class="card-title">รออัพเดตตำแหน่ง</h5>
                                <p class="card-text" style="height:100">
                                    รออัพเดตรายละเอียด
                                </p>
                                <a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-primary">รออัพเดตลิงค์</a>
                            </div>
                            <span class="border border-warning"></span>
                            <span class="border border-warning"></span>
                            <span class="border border-warning"></span>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>