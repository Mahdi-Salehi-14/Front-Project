<!doctype html>
<html lang = "fa">
    <head>
        <title>کاتالوگ محصولات</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <aside>بخش فیلتر و مرتب سازی محصولات بعدا تکمیل می شود</aside>
        <main>
            <div class="out-box">
                <h1>کاتالوگ محصولات</h1>
                <h2>محصولات</h2>
                <div class = "card-grid-3">
                    <?php
                        foreach($productlist as $product)
                            {
                                include 'CardLike.php';
                                include 'CardBookmark.php';
                                echo "
                                    <article class = 'card'>
                                        <a href = 'ViewProduct.php?id={$product['id']}'>
                                            <img src = '{$product['productimg']}'>
                                        </a>
                                        <br>
                                        <div class = 'card-body'>
                                        <div class='cardbottomlink'>
                                            <a href='LikeProduct.php?id={$product['id']}' class='card-iconlink'>
                                                <i class='{$lfa} fa-heart'></i>
                                            </a>
                                            <a href='BookmarkProduct.php?id={$product['id']}' class='card-iconlink'>
                                                <i class='{$bfa} fa-bookmark'></i>
                                            </a>
                                        </div>
                                            <h3><a href = 'ViewProduct.php?id={$product['id']}'>{$product['productname']}</a></h3>
                                            <p>قیمت :{$product['productprice']}</p>
                                        </div>
                                    </article>
                                ";
                            }
                    ?>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
        <script src="LikeBookmark.js"></script>
    </body>
</html>
