<!doctype html>
<html lang="fa">
    <head>
        <title>سبد خرید</title>
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
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>سبد خرید شما</h1>
                    <?php
                        foreach($basket as $product_basket)
                            {
                                echo "
                                    <article class = 'card'>
                                        <div class = 'card-body'>
                                            <h3><a href = 'ViewProduct.php?id={$product_basket['productid']}'>مشاهده</a></h3>
                                            <p>تعداد :{$product_basket['productnumber']}</p>
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