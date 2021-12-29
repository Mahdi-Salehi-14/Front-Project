<header>
    <nav class = "header-nav">
        <ul>
            <li><a href = "index.php">خانه</a></li>
            <li><a href = "ProductList.php">محصولات</a></li>
            <li><a href = "Contact.php">تماس با ما</a></li>
        </ul>
        <ul class="login-nav">
            <?php if(isset($_SESSION['uid']) && $user['role'] == 'adminuser') {echo '<li><a href = "AdminPanel.php">پنل ادمین</a></li>';} ?>
            <li><a href = "<?php if(isset($_SESSION['uid'])) {echo 'ViewProfile.php';} else {echo 'Login.php';} ?>"><?php if(isset($_SESSION['uid'])) {echo 'مشاهده پروفایل';} else {echo 'ورود';} ?></a></li>
            <?php if(isset($_SESSION['uid'])) {echo '<li><a href = "Logout.php">خروج</a></li>';} ?>
        </ul>
    </nav>
</header>