<!doctype html>
<html lang="fa">
    <head>
        <title>تماس با ما</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <div class="out-box">
                <h1>تماس با ما</h1>
                <div class="inner-box">
                    <form action="" method="post">
                        <label for="title">عنوان:</label>
                        <br>
                        <input class="input-text" type="text" id="title" name="title" required>
                        <br>
                        <label for="email">آدرس ایمیل شما:</label>
                        <br>
                        <input class="input-text" type="email" id="email" name="email" placeholder="ABC@Gmail.com" required>
                        <br>
                        <label for="number">شماره موبایل شما:</label>
                        <br>
                        <input class="input-text" type="number" id="number" name="number" placeholder="09123456789" required>
                        <br>
                        <label for="textarea">متن پیام:</label>
                        <br>
                        <textarea class="input-textarea" id="textarea" name="textarea" required></textarea>
                        <br>
                        <button type="submit" name="submit" class="btn">ارسال</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>