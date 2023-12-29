<!DOCTYPE html>
<html>
    <head>
        <title> Archive System | نظام الأرشفة</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="template/login_style.css" >
    </head>
    <body dir="rtl" class="body_login">

     <nav>
     <img src="/images/logo.png" width="200px" >
     </nav>

     <form class="form_login" action="application/login.php" method="post" >
     <h2>أرشفة ملفات</h2>

     <?php if(isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];?>
                        </div>

     <?php } ?>
       <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني</label>
         <input type="email" name="user_email" class="form-control" id="exampleFormControlInput1" placeholder="name@emg.com.sa">
       </div>

       <div class="mb-3">
        <label for="inputPassword5" class="form-label">كلمة المرور</label>
        <input type="password" name="user_password" id="inputPassword5" class="form-control">
       </div>

     <input type="submit" class="btn btn-primary" value="دخول" >
     <a href="pages/register.php" class="link-secondary" ><p>تسجيل حساب جديد</p></a>
     </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
