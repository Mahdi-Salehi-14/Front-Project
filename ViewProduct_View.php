<!doctype html>
<html lang = "fa">
    <head>
        <title>مشاهده محصول</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid-no-aside">
        <?php include 'Header.php'; ?>
        <main>
            <div class="out-box">
                <h1>مشاهده محصول</h1>
                <div class="inner-box-product-view">
                    <div class = "inner-box-product-img">
                        <img src = '<?php echo"{$product['productimg']}"; ?>'>
                    </div>
                    <div class = "inner-box-product-detail">
                        <h2><?php echo"{$product['producttitle']}"; ?></h2>
                        <hr>
                        <p>نام : <?php echo"{$product['productname']}"; ?></p>
                        <p>دسته : <?php if($product['category'] == 'sportshoes'){echo 'کفش';} else if($product['category'] == 'sportsequipment'){echo 'وسیله ورزشی';} else if($product['category'] == 'womensportswear'){echo 'لباس زنانه';} else{echo 'لباس مردانه';} ?></p>
                        <p>برند : <?php if($product['brand'] == 'adidas'){echo 'آدیداس';} else if($product['brand'] == 'nike'){echo 'نایک';} else if($product['brand'] == 'reebok'){echo 'ریبوک';} else{echo 'آندر آرمور';} ?></p>
                        <p>قیمت : <?php echo"{$product['productprice']}"; ?></p>
                        <p>توضیحات : </p><p><?php echo"{$product['productdescription']}"; ?></p>
                        <hr>
                        <div class='cardbottomlink'>
                            <a href='LikeProduct.php?id=<?php echo"{$product['id']}"; ?>' class='card-iconlink'>
                                <i class='<?php if(isset($productlike['id'])){if($productlike['likestatus'] == 'like'){echo 'fas';} else{echo 'far';}} else{echo 'far';} ?> fa-heart'></i>
                            </a>
                            <a href='BookmarkProduct.php?id=<?php echo"{$product['id']}"; ?>' class='card-iconlink'>
                                <i class='<?php if(isset($bookmarklike['id'])){if($bookmarklike['bookmarkstatus'] == 'bookmark-on'){echo 'fas';} else{echo 'far';}} else{echo 'far';} ?> fa-bookmark'></i>
                            </a>
                        </div>
                        <hr>
                        <div>
                            <form action='AddToBasket.php?id=<?php echo"{$product['id']}"; ?>' method="post">
                                <label for="productnumber">تعداد :</label>
                                <br>
                                <input class="input-text" type="number" id="productnumber" name="productnumber" value="1">
                                <input type='hidden' id='basketstatus' name='basketstatus' value='notcompleted'>
                                <br>
                                <button type="submit" name="submit" class="btn">افزودن به سبد خرید</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="inner-box-product-suggestion">
                    <h2>محصولات پیشنهادی</h2>
                    <div class="card-grid-4">
                        <?php
                            foreach($suggestion as $product)
                                {
                                    if($product['id'] != $_GET['id']){
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
                                }
                        ?>
                    </div>
                </div>
                <div class="inner-box-product-comment">
                    <h2>دیدگاه خود را درباره این کالا بیان کنید</h2>
                    <form action="AddComment.php" method="post">
                        <label for="username">نام :</label>
                        <br>
                        <input class="input-text" type="text" id="username" name="username" required>
                        <br>
                        <label for="commenttext">دیدگاه :</label>
                        <br>
                        <textarea class="input-textarea" id="commenttext" name="commenttext" required></textarea>
                        <br>
                        <input type="hidden" id="productid" name="productid" value='<?php echo"{$product['id']}"; ?>'>
                        <input type="hidden" id="confirmation" name="confirmation" value="unconfirmed">
                        <button type="submit" name="submit" class="btn">ثبت</button>
                    </form>
                </div>
                <div class="inner-box-product-comment">
                    <h2>دیدگاه های شما</h2>
                    <?php
                        foreach($productcomment as $comment)
                            {
                                echo "
                                    <hr>
                                    <div>
                                        <p>کاربر : {$comment['username']}</p>
                                        <p>توضیحات : </p><p>{$comment['commenttext']}</p>
                                    </div>
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
