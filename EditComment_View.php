<!doctype html>
<html lang="fa">
    <head>
        <title>مشاهده کامنت</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>مشاهده و ویرایش کامنت کاربر</h1>
                <div class="inner-box">
                    <form action="" method="post">
                        <label for="username">نام کاربر :</label>
                        <br>
                        <input class="input-text" type="text" id="username" name="username" value = "<?php echo $username; ?>" required>
                        <br>
                        <label for="productid">آی دی محصول مورد نظر :</label>
                        <br>
                        <input class="input-text" type="text" id="productid" name="productid" value = "<?php echo $productid; ?>" required>
                        <br>
                        <a href='ViewProduct.php?id=<?php echo $productid; ?>'>مشاهده محصول مورد مظر</a>
                        <br>
                        <label for="commenttext">دیدگاه کاربر :</label>
                        <br>
                        <textarea class="input-textarea" id="commenttext" name="commenttext" required><?php echo $commenttext; ?></textarea>
                        <br>
                        <label for="confirmed">تایید شده</label>
                        <input type="radio" name="confirmation" value="confirmed" id="confirmed" <?php if($confirmation == 'confirmed') {echo 'checked';} ?>>
                        <label for="unconfirmed">تایید نشده</label>
                        <input type="radio" name="confirmation" value="unconfirmed" id="unconfirmed" <?php if($confirmation == 'unconfirmed') {echo 'checked';} ?>>
                        <br>
                        <button type="submit" name="submit" class="btn">ویرایش</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>