<!doctype html>
<html lang="fa">
    <head>
        <title>بوکمارک ها</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav_User.php'; ?>
        <main>
            <div class="out-box">
                <h1>محصولاتی که بوکمارک کردید</h1>
                <div class = "card-grid-3">
                    <?php
                        foreach($bookmarklist as $bookmark_product)
                            {
                                include 'ViewProductInBookmark.php';
                                include 'CardLike.php';
                                include 'CardBookmark.php';
                                echo "
                                    <article class = 'card'>
                                        <a href = 'ViewProduct.php?id={$id}'>
                                            <img src = '{$img}'>
                                        </a>
                                        <br>
                                        <div class = 'card-body'>
                                        <div class='cardbottomlink'>
                                            <a href='LikeProduct.php?id={$id}' class='card-iconlink'>
                                                <i class='{$lfa} fa-heart'></i>
                                            </a>
                                            <a href='BookmarkProduct.php?id={$id}' class='card-iconlink'>
                                                <i class='{$bfa} fa-bookmark'></i>
                                            </a>
                                        </div>
                                            <h3><a href = 'ViewProduct.php?id={$id}'>{$name}</a></h3>
                                            <p>قیمت :{$productprice}</p>
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