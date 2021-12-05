<!doctype html>
<html lang = "fa">
    <head>
        <title>جدول پیام ها</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Style.css" type = "text/css">
        <style>
            :lang(fa){
            direction: rtl;
            }
        </style>
    </head>
    <body>
        <h1>جدول پیام های کاربران</h1>
        <div>
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
                        متن پیام
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
                                        {$message['textarea']}
                                    </td>
                                    <td>
                                    <a href = 'RemoveContact.php?id={$message['id']}'>Remove</a>
                                    <a href = 'ViewContact.php?id={$message['id']}'>View</a>
                                    </td>
                                </tr>
                            ";
                        }
                ?>
            </table>
        </div>
    </body>
</html>