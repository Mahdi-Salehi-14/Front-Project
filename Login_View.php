<!doctype html>
<html lang="fa">
    <head>
        <title>ورود</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <div class="out-box">
                <h1>وارد حساب کاربری خود شوید</h1>
                <div class="inner-box">
                    <form action="" method="post">
                        <label for="email">آدرس ایمیل :</label>
                        <br>
                        <input class="input-text" type="email" id="email" name="email" placeholder="ABC@Gmail.com" required>
                        <br>
                        <label for="password">کلمه عبور خور را وارد کنید :</label>
                        <br>
                        <input class="input-text" type="password" id="password" name="password" required>
                        <br>
                        <button type="submit" name = "submit" class="btn">ورود به حساب</button>
                    </form>
                    <hr>
                    <a href="Register.php">هنوز حساب ندارید؟ یکی ایجاد کنید</a>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>