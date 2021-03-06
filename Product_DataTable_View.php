<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول محصولات</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>جدول اطلاعات محصولات</h1>
                <div class="div-datatable">
                    <table class = "datatable">
                        <tr>
                            <th>
                                کد
                            </th>
                            <th>
                                نام
                            </th>
                            <th>
                                دسته
                            </th>
                            <th>
                                برند
                            </th>
                            <th>
                                قیمت
                            </th>
                            <th>
                                عملیات
                            </th>
                        </tr>
                        <?php
                            foreach($productdatatable as $product)
                                {
                                    echo "
                                        <tr>
                                            <td class = 'table-number'>
                                                {$product['id']}
                                            </td>
                                            <td>
                                                {$product['productname']}
                                            </td>
                                            <td>
                                                {$product['category']}
                                            </td>
                                            <td>
                                                {$product['brand']}
                                            </td>
                                            <td class = 'table-number'>
                                                {$product['productprice']}
                                            </td>
                                            <td>
                                            <div class='table-iconlink-td-3'>
                                                <a href = 'EditProduct.php?id={$product['id']}' class='iconlink'>
                                                    <i class='far fa-edit'></i>
                                                </a>
                                                <a href = 'RemoveProduct.php?id={$product['id']}' class='iconlink'>
                                                    <i class='far fa-trash-alt'></i>
                                                </a>
                                                <a href = 'ViewProduct.php?id={$product['id']}' class='iconlink'>
                                                    <i class='far fa-eye'></i>
                                                </a>
                                            </div>
                                            </td>
                                        </tr>
                                    ";
                                }
                        ?>
                    </table>
                </div>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>