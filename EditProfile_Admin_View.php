<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش اطلاعات</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <h1>اطلاعات کاربر را ویرایش کنید</h1>
            <form action = "" method="post">
                <label for="firstname">نام :</label>
                <br>
                <input type="text" id="firstname" name="firstname" value = "<?php echo $firstname; ?>">
                <br>
                <label for="lastname">فامیل :</label>
                <br>
                <input type="text" id="lastname" name="lastname" value = "<?php echo $lastname; ?>">
                <br>
                <label for="malegender">مذکر</label>
                <input type="radio" name="gender" value="male" id="malegender" <?php if($gender == 'male') {echo 'checked';} ?>>
                <label for="femalegender">مونث</label>
                <input type="radio" name="gender" value="female" id="femalegender" <?php if($gender == 'female') {echo 'checked';} ?>>
                <br>
                <label for="kodmeli">کد ملی :</label>
                <br>
                <input type="number" id="number" name="kodmeli" placeholder="1234567890" value = "<?php echo $kodmeli; ?>">
                <br>
                <label for="email">آدرس ایمیل :</label>
                <br>
                <input type="email" id="email" name="email" placeholder="ABC@Gmail.com" value = "<?php echo $email; ?>">
                <br>
                <label for="number">شماره موبایل :</label>
                <br>
                <input type="number" id="number" name="number" placeholder="09123456789" value = "<?php echo $number; ?>">
                <br>
                <label for="password">کلمه عبور جدید :</label>
                <br>
                <input type="password" id="password" name="password" value = "<?php echo $password; ?>">
                <br>
                <label>تعیین نوع کاربر :</label>
                <br>
                <label for="adminuser">کاربر ادمین</label>
                <input type="radio" name="role" value="adminuser" id="adminuser" <?php if($role == 'adminuser') {echo 'checked';} ?>>
                <label for="normaluser">کاربر عادی</label>
                <input type="radio" name="role" value="normaluser" id="normaluser" <?php if($role == 'normaluser') {echo 'checked';} ?>>
                <label for="blockuser">کاربر مسدود</label>
                <input type="radio" name="role" value="blockuser" id="blockuser" <?php if($role == 'blockuser') {echo 'checked';} ?>>
                <br>
                <button type="submit" name="submit">ذخیره اطلاعات</button>
            </form>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>