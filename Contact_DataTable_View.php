<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول پیام ها</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>جدول پیام های کاربران</h1>
                <div class="div-datatable">
                    <table class = "datatable">
                        <tr>
                            <th>
                                کد
                            </th>
                            <th>
                                عنوان
                            </th>
                            <th>
                                ایمیل
                            </th>
                            <th>
                                شماره تماس
                            </th>
                            <th>
                                عملیات
                            </th>
                        </tr>
                        <?php
                            foreach($messagedatatable as $message)
                                {
                                    echo "
                                        <tr>
                                            <td class = 'table-number'>
                                                {$message['id']}
                                            </td>
                                            <td>
                                                {$message['title']}
                                            </td>
                                            <td>
                                                {$message['email']}
                                            </td>
                                            <td class = 'table-number'>
                                                {$message['number']}
                                            </td>
                                            <td>
                                            <div class='table-iconlink-td-2'>
                                                <a href = 'RemoveContact.php?id={$message['id']}' class='iconlink'>
                                                    <i class='far fa-trash-alt'></i>
                                                </a>
                                                <a href = 'ViewContact.php?id={$message['id']}' class='iconlink'>
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