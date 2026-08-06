<?php 
// // اسم الصفحة 'insert.php' - النسخة النهائية المستقرة

// // 1. تفعيل وضع كشف أخطاء قواعد البيانات الصارم
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// // 2. تضمين ملف الاتصال
// include 'connect.php'; 

// // 3. فحص استقبال البيانات القادمة من فورم التسجيل
// if (isset($_POST['signup'])) {

//     try {
//         // 4. استقبال البيانات الحقيقية من المتصفح
//         $username = $_POST["username"];
//         $email    = $_POST["email"];
//         $password = $_POST["password"];

//         // 5. كتابة استعلام الإدخال بالقيم الحقيقية
//         $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
//         // 6. تنفيذ الاستعلام
//         $conn->query($sql);
        
//         // 7. السطر السحري لضمان الحفظ في قاعدة البيانات فوراً
//         $conn->commit();

//         // 8. رسالة النجاح التي كنت تنتظرها
//         echo "<h1>New record created successfully</h1>";
//         echo "<p>تم تسجيل الحساب بنجاح في قاعدة البيانات.</p>";
//         echo "<a href='signin.php'>اضغط هنا للانتقال لصفحة تسجيل الدخول</a>";

//         // 9. إغلاق الاتصال بأمان
//         $conn->close();

//     } catch (mysqli_sql_exception $e) {
//         // في حال حدوث أي خطأ غير متوقع يظهر هنا
//         die("حدث خطأ أثناء حفظ البيانات: " . $e->getMessage());
//     }

// } else {
//     // رسالة حماية وتوجيه إذا حاول أحد دخول الصفحة بدون ملء الفورم
//     echo "<h1>تنبيه: لا يمكن دخول هذه الصفحة مباشرة!</h1>";
//     echo "<p>من فضلك اذهب إلى <a href='signup.php'>صفحة التسجيل</a> واملأ البيانات أولاً.</p>";
// }

// ================================= //

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

// require 'connect.php';
include 'connect.php';

if(isset($_POST['signup'])){
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
}

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
// */

?>
