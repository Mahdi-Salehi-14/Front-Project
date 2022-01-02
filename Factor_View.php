<!doctype html>
<html lang="fa">
    <head>
        <title>فاکتور</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>فاکتور خرید شما</h1>
                <div class="inner-box-product-purchase">
                    <h2>اطلاعات خرید</h2>
                    <hr>
                    <p>نام خریدار : <?php echo "{$user['firstname']}"; ?></p>
                    <p>نام خانوادگی خریدار : <?php echo "{$user['lastname']}"; ?></p>
                    <p>شماره تماس خریدار : <?php echo "{$user['number']}"; ?></p>
                    <p>ایمیل خریدار : <?php echo "{$user['email']}"; ?></p>
                    <hr>
                    <p>شماره فاکتور : <?php echo "{$order['id']}"; ?></p>
                    <p>کد پستی : <?php echo "{$order['postalcode']}"; ?></p>
                    <p>آدرس : <?php echo "{$order['address']}"; ?></p>
                    
                    <?php
                        $allsum = 0;
                        foreach($basket as $product_basket)
                            {
                                include 'ViewProductInBasket.php';
                                echo "
                                    <hr>
                                    <article class = 'basket-card'>
                                        <img src = '{$img}'>
                                        <div class = 'card-body'>
                                            <h3>{$name}</h3>
                                            <p>قیمت واحد : {$productprice}</p>
                                            <p>تعداد : {$product_basket['productnumber']}</p>
                                            <hr>
                                            <p>قیمت مجموع : {$sum}</p>
                                        </div>
                                    </article>

                                ";
                                $allsum = $allsum + $price;
                            }
                    ?>
                    <hr>
                    <div class="inner-box-product-purchase">
                        <form action="Payment.php" method="post">
                            <label for='allsum'>قیمت کل : <?php echo "{$allsum}"; ?></label>
                            <br>
                            <input type='hidden' id='orderid' name='orderid' value='<?php echo "{$order['id']}"; ?>'>
                            <button type='submit' name='submit' class='btn'>ثبت و پرداخت</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>