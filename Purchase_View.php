<!doctype html>
<html lang="fa">
    <head>
        <title>فرایند خرید</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>تکمیل فرایند خرید</h1>
                <div class="inner-box-product-purchase">
                    <form action="Factor.php" method="post">
                        <input type='hidden' id='userid' name='userid' value='{$uid}'>
                        <label for="address">آدرس تحویل گیرنده :</label>
                        <br>
                        <textarea class="input-textarea" id="address" name="address" required></textarea>
                        <br>
                        <label for="postalcode">کد پستی 10 رقمی (بدون خط تیره وارد شود) :</label>
                        <br>
                        <input class="input-text" type="text" id="postalcode" name="postalcode" required>
                        <br>
                        <label>روش ارسال :</label>
                        <br>
                        <input type="radio" name="transport" value="in-person" id="in-person">
                        <label for="in-person">تحویل حضوری</label>
                        <br>
                        <input type="radio" name="transport" value="mail" id="mail" checked>
                        <label for="mail">ارسال از طریق پست</label>
                        <hr>
                        <label>نحوه پرداخت :</label>
                        <br>
                        <input type="radio" name="payment" value="check-bank" id="check-bank">
                        <label for="check-bank">پرداخت از طریق چک یا رسید بانکی</label>
                        <br>
                        <input type="radio" name="payment" value="door-to-door" id="door-to-door">
                        <label for="door-to-door">پرداخت درب منزل</label>
                        <br>
                        <input type="radio" name="payment" value="internet" id="internet" checked>
                        <label for="internet">پرداخت از طریق درگاه اینترنتی</label>
                        <hr>
                        <button type="submit" name="submit" class="btn">صدور فاکتور</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>