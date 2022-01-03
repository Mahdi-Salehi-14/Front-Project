<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش اطلاعات</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>اطلاعات خود را ویرایش کنید</h1>
                <div class="inner-box">
                    <form action = "" method="post">
                        <label for="firstname">نام :</label>
                        <br>
                        <input class="input-text" type="text" id="firstname" name="firstname" value = "<?php echo $firstname; ?>" required>
                        <br>
                        <label for="lastname">فامیل :</label>
                        <br>
                        <input class="input-text" type="text" id="lastname" name="lastname" value = "<?php echo $lastname; ?>" required>
                        <br>
                        <label>جنسیت :</label>
                        <br>
                        <input type="radio" name="gender" value="male" id="malegender" <?php if($gender == 'male') {echo 'checked';} ?>>
                        <label for="malegender">مذکر</label>
                        <br>
                        <input type="radio" name="gender" value="female" id="femalegender" <?php if($gender == 'female') {echo 'checked';} ?>>
                        <label for="femalegender">مونث</label>
                        <br>
                        <label for="kodmeli">کد ملی :</label>
                        <br>
                        <input class="input-text" type="number" id="number" name="kodmeli" placeholder="1234567890" value = "<?php echo $kodmeli; ?>" required>
                        <br>
                        <label for="email">آدرس ایمیل :</label>
                        <br>
                        <input class="input-text" type="email" id="email" name="email" placeholder="ABC@Gmail.com" value = "<?php echo $email; ?>" required>
                        <br>
                        <label for="number">شماره موبایل :</label>
                        <br>
                        <input class="input-text" type="number" id="number" name="number" placeholder="09123456789" value = "<?php echo $number; ?>" required>
                        <br>
                        <label for="password">کلمه عبور جدید :</label>
                        <br>
                        <input class="input-text" type="password" id="password" name="password" value = "<?php echo $password; ?>" required>
                        <br>
                        <button type="submit" name="submit" class="btn">ذخیره اطلاعات</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>