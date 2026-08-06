<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form | Mora PHP Training</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- تم تصحيح رابط مكتبة Font Awesome الإصدار 6 بنجاح هنا -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body class="signup-body">
<div class="wrapper">
    <header>Signup Form</header>
    <form action="insert.php" method="post" autocomplete="off">
        
        <!-- حقل اسم المستخدم -->
        <div class="field username">
            <div class="input-area">
                <input type="text" name="username" placeholder="Enter Username" required minlength="3" maxlength="20">
                <i class="icon fas fa-user"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Username can't be blank</div>
        </div>

        <!-- حقل البريد الإلكتروني -->
        <div class="field email">
            <div class="input-area">
                <input type="email" name="email" placeholder="Enter Email Address" required>
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Email can't be blank</div>
        </div>

        <!-- حقل كلمة المرور -->
        <div class="field password">
            <div class="input-area">
                <input type="password" name="password" placeholder="Enter Password" required minlength="6">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Password can't be blank</div>
        </div>

        <div class="pass-txt"><a href="#">Forgot password?</a></div>
        <input type="submit" name="signup" value="Signup">
    </form>
    <div class="sign-txt">Already a member? <a href="signin.php">Signin now</a></div>
</div>
<!-- قمنا بإضافة ?v=1.1 لإجبار المتصفح على جلب الملف الجديد من السيرفر وتخطي الـ Cache تماماً -->
<!-- <script src="js/app.js?v=1.1"></script> -->

</body>
</html>
