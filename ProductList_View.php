<!doctype html>
<html lang = "fa">
    <head>
        <title>کاتالوگ محصولات</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body class = "body-grid">
        <?php include 'Header.html'; ?>
        <aside>بخش فیلتر و مرتب سازی محصولات بعدا تکمیل می شود</aside>
        <main>
            <h1>کاتالوگ محصولات</h1>
            <h2>محصولات</h2>
            <div class = "grid-container">
                <?php
                    foreach($productlist as $product)
                        {
                            echo "
                                <article class = 'card'>
                                    <img src = '{$product['productimg']}' href = ''>
                                    <br>
                                    <div class = 'card-body'>
                                        <h3><a href = 'ProductDetails.php?id={$product['id']}'>{$product['productname']}</a></h3>
                                        <p>قیمت :{$product['productprice']}</p>
                                    </div>
                                </article>
                            ";
                        }
                ?>
            </div>
        </main>
        <?php include 'Footer.html'; ?>
    </body>
</html>