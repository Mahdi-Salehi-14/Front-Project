<!doctype html>
<html lang="fa">
    <head>
        <title>سبد خرید</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>سبد خرید شما</h1>
                    <?php
                        $allsum = 0;
                        foreach($basket as $product_basket)
                            {
                                include 'ViewProductInBasket.php';
                                echo "
                                    <hr>
                                    <article class = 'basket-card'>
                                        <a href = 'ViewProduct.php?id={$id}'>
                                            <img src = '{$img}'>
                                        </a>
                                        <div class = 'card-body'>
                                            <h3><a href = 'ViewProduct.php?id={$product_basket['productid']}'>{$name}</a></h3>
                                            <p>قیمت واحد : {$productprice}</p>
                                            <p>تعداد : {$product_basket['productnumber']}</p>
                                            <hr>
                                            <a href = 'RemoveBasket.php?id={$product_basket['id']}' class='iconlink basket-iconlink'>
                                                <i class='far fa-trash-alt'></i>
                                            </a>
                                            <form action='EditBasket.php' method='post'>
                                                <label for='productnumber'>ویرایش تعداد کالا :</label>
                                                <br>
                                                <input class='input-text' type='number' id='productnumber' name='productnumber' value='{$product_basket['productnumber']}'>
                                                <br>
                                                <input type='hidden' id='basketid' name='basketid' value='{$product_basket['id']}'>
                                                <button type='submit' name='submit' class='btn'>ویرایش</button>
                                            </form>
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
                        <form action="Purchase.php" method="post">
                            <label for='allsum'>قیمت کل : <?php echo "{$allsum}"; ?></label>
                            <br>
                            <button type='submit' name='submit' class='btn'>تکمیل فرایند خرید</button>
                        </form>
                    </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>