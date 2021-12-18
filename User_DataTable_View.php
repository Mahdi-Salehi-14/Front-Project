<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول کاربران</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
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
                            جنسیت
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
                                            {$user['gender']}
                                        </td>
                                        <td>
                                            {$user['email']}
                                        </td>
                                        <td class = 'table-number'>
                                            {$user['number']}
                                        </td>
                                        <td>
                                        <a href = 'EditProfile_Admin.php?id={$user['id']}'>Edit</a>
                                        <a href = 'RemoveUser.php?id={$user['id']}'>Remove</a>
                                        <a href = 'ViewProfile.php?id={$user['id']}'>View</a>
                                        </td>
                                    </tr>
                                ";
                            }
                    ?>
                </table>
            </div>
        </main>
        <?php include 'Footer.html'; ?>
    </body>
</html>