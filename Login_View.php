<!doctype html>
<html lang="fa">
    <head>
        <title>ورود</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <h1>وارد حساب کاربری خود شوید</h1>
            <form action="" method="post">
                <label for="email">آدرس ایمیل :</label>
                <br>
                <input type="email" id="email" name="email" placeholder="ABC@Gmail.com">
                <br>
                <label for="password">کلمه عبور خور را وارد کنید :</label>
                <br>
                <input type="password" id="password" name="password">
                <br>
                <button type="submit" name = "submit">ورود به حساب</button>
            </form>
            <a href="Register.php">هنوز حساب ندارید؟ یکی ایجاد کنید</a>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>