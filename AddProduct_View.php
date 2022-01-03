<!doctype html>
<html lang="fa">
    <head>
        <title>ورود اطلاعات محصول</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>ورود اطلاعات محصول جدید</h1>
                <div class="inner-box">
                    <form action="" method="post">
                        <label for="producttitle">عنوان محصول :</label>
                        <br>
                        <input class="input-text" type="text" id="producttitle" name="producttitle" required>
                        <br>
                        <label for="productname">نام محصول :</label>
                        <br>
                        <input class="input-text" type="text" id="productname" name="productname" required>
                        <br>
                        <label for="productdescription">توضیحات محصول :</label>
                        <br>
                        <textarea class="input-textarea" id="productdescription" name="productdescription" required></textarea>
                        <br>
                        <label for="productcode">کد محصول :</label>
                        <br>
                        <input class="input-text" type="number" id="productcode" name="productcode" required>
                        <br>
                        <label>دسته محصول :</label>
                        <br>
                        <select name = "category">
                            <option value = "sportshoes">کفش ورزشی</option>
                            <option value = "sportsequipment">وسیله ورزشی</option>
                            <option value = "womensportswear">لباس ورزشی زنانه</option>
                            <option value = "mensportswear">لباس ورزشی مردانه</option>
                        </select>
                        <br>
                        <label>برند محصول :</label>
                        <br>
                        <select name = "brand">
                            <option value = "adidas">Adidas</option>
                            <option value = "nike">Nike</option>
                            <option value = "reebok">Reebok</option>
                            <option value = "underarmour">Under Armour</option>
                        </select>
                        <br>
                        <label for="productprice">قیمت محصول (قیمت ها به ریال وارد شوند) :</label>
                        <br>
                        <input class="input-text" type="number" id="productprice" name="productprice" required>
                        <br>
                        <label>عکس جدید محصول :</label>
                        <br>
                        <input type="file" id="productimg" name="productimg">
                        <br>
                        <button type="submit" name="submit" class="btn">ثبت محصول</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>