<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow">
    <div class="container">
        <a class="navbar-brand" href="index.php">นายมาร์ก</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">เกี่ยวกับเรา</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../index.php" target="_blank">ทั่วไป</a>
                </li>

                <?php if (isset($_SESSION['auth_user'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['auth_user'] ['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="#">ระบบจัดการ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="allcode.php" method="post">
                                    <button type="submit" name="logout_btn" class="dropdown-item">ออกจากระบบ</button>
                                </form>
                                
                        </ul>
                    </li>
                <?php else : ?>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>