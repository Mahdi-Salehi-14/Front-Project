<?php
    $uid = $_GET['id'];
?>
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
    <body>
        <h1>ویرایش اطلاعات محصول</h1>
        <form action="EditProduct.php?id=<?php echo $uid;?>" method="post">
            <label for="producttitle">عنوان جدید محصول :</label>
            <br>
            <input type="text" id="producttitle" name="producttitle">
            <br>
            <label for="productname">نام جدید محصول :</label>
            <br>
            <input type="text" id="productname" name="productname">
            <br>
            <label for="productdescription">توضیحات جدید محصول :</label>
            <br>
            <textarea id="productdescription" name="productdescription"></textarea>
            <br>
            <label for="productcode">کد جدید محصول :</label>
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
            <label for="productprice">قیمت جدید محصول (قیمت ها به ریال وارد شوند) :</label>
            <br>
            <input type="number" id="productprice" name="productprice">
            <br>
            <label>عکس جدید محصول :</label>
            <br>
            <input type="file" id="productimg" name="productimg">
            <br>
            <button type="submit">ویرایش اطلاعات محصول</button>
        </form>
    </body>
</html>