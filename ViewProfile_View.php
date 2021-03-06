<!doctype html>
<html lang="fa">
    <head>
        <title>حساب کاربری</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>حساب کاربری شما</h1>
                <div class="inner-box">
                    <div class="record">
                        <p>نام : </p><p><?php echo "{$user['firstname']}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>فامیل : </p><p><?php echo "{$user['lastname']}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>جنسیت : </p><p><?php if($user['gender'] == 'male') {echo 'آقا';} else {echo 'خانم';} ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>کد ملی : </p><p><?php echo "{$user['kodmeli']}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>ایمیل : </p><p><?php echo "{$user['email']}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>شماره تماس : </p><p><?php echo "{$user['number']}"; ?></p>
                    </div>
                </div>
                <div class="inner-box">
                    <div class="record">
                        <p>تعداد سفارش های شما : </p><p><?php echo "{$ordercount}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>تعداد محصولاتی که لایک کردید : </p><p><?php echo "{$likecount}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                    <p>تعداد محصولاتی که بوکمارک کردید : </p><p><?php echo "{$bookmarkcount}"; ?></p>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>