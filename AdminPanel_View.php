<!doctype html>
<html lang = "fa">
    <head>
        <title>داشبورد</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>پنل داشبورد</h1>
                <div class="inner-box">
                    <div class="record">
                        <p>تعداد بازدید های سایت : </p><p><?php echo "{$visitcount}"; ?></p>
                    </div>
                    <hr>
                    <div class="record">
                        <p>تعداد سفارش های کاربران : </p><p><?php echo "{$ordercount}"; ?></p>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>