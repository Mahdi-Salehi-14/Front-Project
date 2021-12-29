<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول کامنت ها</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <h1>جدول کامنت های کاربران</h1>
            <div class="div-datatable">
                <table class = "datatable">
                    <tr>
                        <th>
                            کد
                        </th>
                        <th>
                            نام کاربر
                        </th>
                        <th>
                            محصول
                        </th>
                        <th>
                            وضعیت
                        </th>
                        <th>
                            عملیات
                        </th>
                    </tr>
                    <?php
                        foreach($commentdatatable as $comment)
                            {
                                echo "
                                    <tr>
                                        <td class = 'table-number'>
                                            {$comment['id']}
                                        </td>
                                        <td>
                                            {$comment['username']}
                                        </td>
                                        <td>
                                            {$comment['productid']}
                                        </td>
                                        <td>
                                            {$comment['confirmation']}
                                        </td>
                                        <td>
                                        <a href = 'RemoveComment.php?id={$comment['id']}' class='iconlink'>
                                            <i class='far fa-trash-alt'></i>
                                        </a>
                                        <a href = 'EditComment.php?id={$comment['id']}' class='iconlink'>
                                            <i class='far fa-eye'></i>
                                        </a>
                                        </td>
                                    </tr>
                                ";
                            }
                    ?>
                </table>
            </div>
        </main>
        <?php include 'Footer.php'; ?>
    </body>
</html>