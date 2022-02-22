<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container shadow my-3 py-3">

    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <div class="mx-auto" style="width: 22rem;">
                <img src="images/services/thanos2.png" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">

                <?php include("message.php"); ?>

                <div class="card-header text-center bg-primary text-white">
                    <h4>ระบบลงทะเบียน</h4>
                </div>

                <div class="card-body fs-5">
                    <form action="registercode.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">ชื่อสกุล</label>
                            <input type="firstname" name="fname" required placeholder="โปรดกรุณากรอก ชื่อสกุล" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">นามสกุล</label>
                            <input type="lastname" name="lname" required placeholder="โปรดกรุณากรอก นามสกุล" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">อีเมล์</label>
                            <input type="email" name="email" required placeholder="โปรดกรุณากรอก อีเมลล์" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">รหัสผ่าน</label>
                            <input type="password" name="password" required placeholder="โปรดกรุณากรอก รหัสผ่าน" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ยืนยันรหัสผ่าน</label>
                            <input type="password" name="cpassword" required placeholder="โปรดกรุณาป้อน รหัสผ่านซ้ำ" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="register_btn" class="btn btn-primary">ลงทะเบียน</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>