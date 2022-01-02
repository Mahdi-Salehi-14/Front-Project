<!doctype html>
<html lang="fa">
    <head>
        <title>پیام</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>مشاهده پیام کاربر</h1>
                <div class="inner-box">
                    <p>ایمیل کاربر : <?php echo "{$message['email']}"; ?></p>
                    <hr>
                    <p>شماره موبایل کاربر : <?php echo "{$message['number']}"; ?></p>
                    <hr>
                    <p>عنوان پیام : <?php echo "{$message['title']}"; ?></p>
                    <hr>
                    <p>متن پیام :</p>
                    <p><?php echo "{$message['textarea']}"; ?></p>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>