<!doctype html>
<html lang="fa">
    <head>
        <title>ثبت نام</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <div class="out-box">
            <h1>ثبت نام کاربر جدید</h1>
                <div class="inner-box">
                    <p>حساب کاربری دارید؟ <a href="Login.php">به جای آن، وارد شوید!</a></p>
                    <form action="" method="post">
                        <label for="firstname">نام :</label>
                        <br>
                        <input class="input-text" type="text" id="firstname" name="firstname" required>
                        <br>
                        <label for="lastname">فامیل :</label>
                        <br>
                        <input class="input-text" type="text" id="lastname" name="lastname" required>
                        <br>
                        <label>جنسیت :</label>
                        <br>
                        <input type="radio" name="gender" value="male" id="malegender">
                        <label for="malegender">مذکر</label>
                        <br>
                        <input type="radio" name="gender" value="female" checked id="femalegender">
                        <label for="femalegender">مونث</label>
                        <br>
                        <label for="kodmeli">کد ملی :</label>
                        <br>
                        <input class="input-text" type="number" id="kodmeli" name="kodmeli" placeholder="1234567890" required>
                        <br>
                        <label for="email">آدرس ایمیل :</label>
                        <br>
                        <input class="input-text" type="email" id="email" name="email" placeholder="ABC@Gmail.com" required>
                        <br>
                        <label for="number">شماره موبایل :</label>
                        <br>
                        <input class="input-text" type="number" id="number" name="number" placeholder="09123456789" required>
                        <br>
                        <label for="password">کلمه عبور :</label>
                        <br>
                        <input class="input-text" type="password" id="password" name="password" required>
                        <br>
                        <input type="hidden" id="role" name="role" value="normaluser">
                        <button type="submit" name="submit" class="btn">ثبت نام</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>