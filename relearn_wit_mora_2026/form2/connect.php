<?php

// //MySQLi Object-Oriented

// $localhost="localhost";
// $username="root";
// $password="";
// $dbname="mora_php_training";

// //pdo
// //mysqli
// $conn = new mysqli($localhost,$username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// *************** Better modern way ****************** //
// إعدادات الاتصال
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "mora_php_training");

// الطريقة الحديثة والمضمونة لمعالجة الأخطاء في PHP 8+
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // محاولة الاتصال
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $conn->set_charset("utf8mb4");

    if (!$conn->ping()) {
        throw new mysqli_sql_exception("Database connection is not responding.");
    }
} catch (mysqli_sql_exception $e) {
    // في حال حدوث أي خطأ في الاتصال، سيتم تنفيذ هذا الجزء تلقائياً
    // نستخدم دالة مخصصة لعرض رسالة نظيفة للمستخدم دون كشف تفاصيل السيرفر الحساسة
    die("Connection failed: " . $e->getMessage());
}

// =========================================================== //

//MySQLi Procedural

// $localhost="localhost";
// $username="root";
// $password="";
// $dbname="mora_php_training";


// @$conn=mysqli_connect($localhost,$username, $password, $dbname);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// *************** Better modern way ****************** //
// // MySQLi Procedural - الأسلوب الحديث والمتوافق مع PHP 8+
// $localhost = "localhost";
// $username  = "root";
// $password  = "";
// $dbname    = "mora_php_training";

// try {
//     // اتصلنا مباشرة بدون علامة @ لأننا سنعالج الخطأ في الأسفل بأمان
//     $conn = mysqli_connect($localhost, $username, $password, $dbname);
//     echo "Connected successfully";
// } catch (mysqli_sql_exception $e) {
//     // هنا يتم التقاط الخطأ تلقائياً وبشكل آمن تماماً
//     die("Connection failed: " . $e->getMessage());
// }


?>