<!doctype html>
<html lang="fa">
    <head>
        <title>خرید ها</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>خرید های شما</h1>
                <hr>
                <div class="inner-box-product-purchase">
                <h2>تعداد سفارش های شما : <?php echo"{$count}" ?></h2>
                <?php
                    foreach($order as $order_product)
                        {
                            if($order_product['payment'] == 'check-bank'){
                                $payment = 'پرداخت از طریق فیش یا چک بانکی';
                            }
                            else if($order_product['payment'] == 'door-to-door'){
                                $payment = 'پرداخت درب منزل';
                            }
                            else{
                                $payment = 'پرداخت اینترنتی';
                            }

                            if($order_product['transport'] == 'in-person'){
                                $transport = 'پرداخت درب منزل';
                            }
                            else{
                                $transport = 'ارسال از طریق پست';
                            }
                            echo "
                                <hr>
                                <article class = 'purchase-card'>
                                    <div class = 'card-body'>
                                        <h3>شماره فاکتور : {$order_product['id']}</h3>
                                        <hr>
                                        <p>روش پرداخت : {$payment}</p>
                                        <p>روش ارسال : {$transport}</p>
                                        <p>کد پستی : {$order_product['postalcode']}</p>
                                        <p>آدرس : </p><p>{$order_product['address']}</p>
                                        <hr>
                                        <a href = 'PurchaseDetail.php?id={$order_product['id']}' class='iconlink basket-iconlink'>
                                            <i class='far fa-eye'></i>
                                        </a>
                                    </div>
                                </article>
                            ";
                        }
                ?>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>