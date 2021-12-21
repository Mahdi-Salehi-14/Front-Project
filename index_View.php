<!doctype html>
<html lang = "fa">
    <head>
        <title>خانه | Home</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <h1>فروشگاه چیتا اسپورت</h1>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src = "Images\banner1.jpg"></div>
                    <div class="swiper-slide"><img src = "Images\banner2.jpg"></div>
                    <div class="swiper-slide"><img src = "Images\banner3.jpg"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
            </div>
            <h2>ارزان ترین محصولات</h2>
            <div class = "grid-container">
                <?php
                    foreach($productlistcheapest as $product)
                        {
                            echo "
                                <article class = 'card'>
                                    <a href = 'ViewProduct.php?id={$product['id']}'>
                                        <img src = '{$product['productimg']}'>
                                    </a>
                                    <br>
                                    <div class = 'card-body'>
                                        <h3><a href = 'ViewProduct.php?id={$product['id']}'>{$product['productname']}</a></h3>
                                        <p>قیمت :{$product['productprice']}</p>
                                    </div>
                                </article>
                            ";
                        }
                ?>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="Main.js"></script>
    </body>
</html>