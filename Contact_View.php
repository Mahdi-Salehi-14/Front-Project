<!doctype html>
<html lang="fa">
    <head>
        <title>تماس با ما</title>
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
            <h1>تماس با ما</h1>
            <form action="Contact.php" method="post">
                <label for="title">عنوان:</label>
                <br>
                <input type="text" id="title" name="title">
                <br>
                <label for="email">آدرس ایمیل شما:</label>
                <br>
                <input type="email" id="email" name="email" placeholder="ABC@Gmail.com">
                <br>
                <label for="number">شماره موبایل شما:</label>
                <br>
                <input type="number" id="number" name="number" placeholder="09123456789">
                <br>
                <label for="textarea">متن پیام:</label>
                <br>
                <textarea id="textarea" name="textarea"></textarea>
                <br>
                <button type="submit">ارسال</button>
            </form>
        </main>
        <?php include 'Footer.html'; ?>
    </body>
</html>