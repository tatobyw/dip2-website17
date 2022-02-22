<?php session_start(); ?>

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

        <?php include("message.php"); ?>

            <div class="card shadow">

                <div class="card-header">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
                    <form action="logincode.php" method="post">
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" required class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="login_btn" class="btn btn-primary">Login Now</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>