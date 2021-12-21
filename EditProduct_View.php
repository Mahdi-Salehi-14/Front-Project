<!doctype html>
<html lang="fa">
    <head>
        <title>ویرایش اطلاعات محصول</title>
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
        <?php include 'AsideNav.php'; ?>
        <main>
            <h1>ویرایش اطلاعات محصول</h1>
            <form action="" method="post">
                <label for="producttitle">عنوان جدید محصول :</label>
                <br>
                <input type="text" id="producttitle" name="producttitle" value = "<?php echo $producttitle; ?>">
                <br>
                <label for="productname">نام جدید محصول :</label>
                <br>
                <input type="text" id="productname" name="productname" value = "<?php echo $productname; ?>">
                <br>
                <label for="productdescription">توضیحات جدید محصول :</label>
                <br>
                <textarea id="productdescription" name="productdescription"><?php echo $productdescription; ?></textarea>
                <br>
                <label for="productcode">کد جدید محصول :</label>
                <br>
                <input type="number" id="productcode" name="productcode" value = "<?php echo $productcode; ?>">
                <br>
                <label>دسته محصول :</label>
                <br>
                <select name = "category">
                    <option value = "sportshoes" <?php if($category == 'sportshoes') {echo 'selected';} ?>>کفش ورزشی</option>
                    <option value = "sportsequipment" <?php if($category == 'sportsequipment') {echo 'selected';} ?>>وسیله ورزشی</option>
                    <option value = "womensportswear" <?php if($category == 'womensportswear') {echo 'selected';} ?>>لباس ورزشی زنانه</option>
                    <option value = "mensportswear" <?php if($category == 'mensportswear') {echo 'selected';} ?>>لباس ورزشی مردانه</option>
                </select>
                <br>
                <label>برند محصول :</label>
                <br>
                <select name = "brand">
                    <option value = "adidas" <?php if($brand == 'adidas') {echo 'selected';} ?>>Adidas</option>
                    <option value = "nike" <?php if($brand == 'nike') {echo 'selected';} ?>>Nike</option>
                    <option value = "reebok" <?php if($brand == 'reebok') {echo 'selected';} ?>>Reebok</option>
                    <option value = "underarmour" <?php if($brand == 'underarmour') {echo 'selected';} ?>>Under Armour</option>
                </select>
                <br>
                <label for="productprice">قیمت جدید محصول (قیمت ها به ریال وارد شوند) :</label>
                <br>
                <input type="number" id="productprice" name="productprice" value = "<?php echo $productprice; ?>">
                <br>
                <label>عکس جدید محصول :</label>
                <br>
                <input type="file" id="productimg" name="productimg" value = "<?php echo $productimg; ?>">
                <br>
                <button type="submit" name="submit">ویرایش اطلاعات محصول</button>
            </form>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>