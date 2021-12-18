<!doctype html>
<html lang="fa">
    <head>
        <title>ورود اطلاعات محصول</title>
        <meta charset="utf-8">
        <link rel = "stylesheet" href = "Style.css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body class = "body-grid">
        <?php include 'Header.html'; ?>
        <?php include 'AsideNav.html'; ?>
        <main>
            <h1>ورود اطلاعات محصول جدید</h1>
            <form action="AddProduct.php" method="post">
                <label for="producttitle">عنوان محصول :</label>
                <br>
                <input type="text" id="producttitle" name="producttitle">
                <br>
                <label for="productname">نام محصول :</label>
                <br>
                <input type="text" id="productname" name="productname">
                <br>
                <label for="productdescription">توضیحات محصول :</label>
                <br>
                <textarea id="productdescription" name="productdescription"></textarea>
                <br>
                <label for="productcode">کد محصول :</label>
                <br>
                <input type="number" id="productcode" name="productcode">
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
                <input type="number" id="productprice" name="productprice">
                <br>
                <label>عکس جدید محصول :</label>
                <br>
                <input type="file" id="productimg" name="productimg">
                <br>
                <button type="submit">ثبت محصول</button>
            </form>
        </main>
        <?php include 'Footer.html'; ?>
    </body>
</html>