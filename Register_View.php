<!doctype html>
<html lang="fa">
    <head>
        <title>ثبت نام</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.html'; ?>
        <main>
            <h1>ثبت نام کاربر جدید</h1>
            حساب کاربری دارید؟ <a href="Login_View.php">به جای آن، وارد شوید!</a>
            <form action="Register.php" method="post">
                <label for="firstname">نام :</label>
                <br>
                <input type="text" id="firstname" name="firstname">
                <br>
                <label for="lastname">فامیل :</label>
                <br>
                <input type="text" id="lastname" name="lastname">
                <br>
                <label for="malegender">مذکر</label>
                <input type="radio" name="gender" value="male" checked id="malegender">
                <label for="femalegender">مونث</label>
                <input type="radio" name="gender" value="female" checked id="femalegender">
                <br>
                <label for="kodmeli">کد ملی :</label>
                <br>
                <input type="number" id="kodmeli" name="kodmeli" placeholder="1234567890">
                <br>
                <label for="email">آدرس ایمیل :</label>
                <br>
                <input type="email" id="email" name="email" placeholder="ABC@Gmail.com">
                <br>
                <label for="number">شماره موبایل :</label>
                <br>
                <input type="number" id="number" name="number" placeholder="09123456789">
                <br>
                <label for="password">کلمه عبور :</label>
                <br>
                <input type="password" id="password" name="password">
                <br>
                <button type="submit">ثبت نام</button>
            </form>
        </main>
        <?php include 'Footer.html'; ?>
    </body>
</html>