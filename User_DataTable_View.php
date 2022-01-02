<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول کاربران</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <script src="https://kit.fontawesome.com/766647deb5.js" crossorigin="anonymous"></script>
    </head>
    <body class = "body-grid">
        <?php include 'Header.php'; ?>
        <?php include 'AsideNav.php'; ?>
        <main>
            <div class="out-box">
                <h1>جدول اطلاعات کاربران</h1>
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
                                نام خانوادگی
                            </th>
                            <th>
                                وضعیت
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
                            foreach($userdatatable as $user)
                                {
                                    echo "
                                        <tr>
                                            <td class = 'table-number'>
                                                {$user['id']}
                                            </td>
                                            <td>
                                                {$user['firstname']}
                                            </td>
                                            <td>
                                                {$user['lastname']}
                                            </td>
                                            <td>
                                                {$user['role']}
                                            </td>
                                            <td>
                                                {$user['email']}
                                            </td>
                                            <td class = 'table-number'>
                                                {$user['number']}
                                            </td>
                                            <td>
                                            <div class='table-iconlink-td-3'>
                                                <a href = 'EditProfile_Admin.php?id={$user['id']}' class='iconlink'>
                                                    <i class='far fa-edit'></i>
                                                </a>
                                                <a href = 'RemoveUser.php?id={$user['id']}' class='iconlink'>
                                                    <i class='far fa-trash-alt'></i>
                                                </a>
                                                <a href = 'ViewProfile_Admin.php?id={$user['id']}' class='iconlink'>
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