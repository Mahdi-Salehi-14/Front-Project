<!doctype html>
<html lang="fa">
    <head>
        <title>اطلاعات خرید</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>خرید های با شماره فاکتور <?php echo"{$oid}" ?></h1>
                <div class="inner-box-product-purchase">
                    <?php
                        $allsum = 0;
                        foreach($orderitem as $order_item)
                            {
                                include 'ViewProductInPurchase.php';
                                echo "
                                    <article class = 'basket-card'>
                                        <img src = '{$img}'>
                                        <div class = 'card-body'>
                                            <h3>{$name}</h3>
                                            <p>قیمت واحد : {$productprice}</p>
                                            <p>تعداد : {$order_item['productnumber']}</p>
                                            <hr>
                                            <p>قیمت مجموع : {$sum}</p>
                                        </div>
                                    </article>
                                    <hr>
                                ";
                                $allsum = $allsum + $price;
                            }
                    ?>
                    <div class="inner-box-product-purchase">
                            <p>قیمت کل : <?php echo "{$allsum}"; ?></p>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>