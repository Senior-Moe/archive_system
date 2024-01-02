<!DOCTYPE html>
    <html>
    <head>
    <title><?php echo $title; ?> | HR System</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" type="text/css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
      font-family: 'Noto Naskh Arabic', serif;
      background-image: url("/images/wallpaper.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
     background-size: cover;
   }

  table {
    width: 100%;
  }
  table, th, td {
  border-collapse: collapse;
  border: 2px solid;
  }
    </style>
    </head>
   <body dir="rtl">
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">


<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <a class="navbar-brand" href="/pages/home.php"><img src="/images/logo2.png" width="80px"></a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">مرحباً  <?php echo $_SESSION['username'] ?>!</a>
      </li>
      <li class="nav-item">
     <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     الإعدادات
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" href="#">تغيير كلمة المرور</a>
     <a class="dropdown-item" href="#">اعداد الصلاحيات للمستخدمين</a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#">طريقة الإستخدام</a>
                                                          </div>
                                                          </li>
        <a class="nav-link" href="#">إضافات</a>
      </li >
    </ul>
</div>
          <div>
          <ul class=" navbar-nav">
          <li class="nav-item">
        <a class="nav-link" href="/application/logout.php"><button type="button" class="btn btn-danger btn-sm">تسجيل خروج</button></a>
          </li>
          </ul>
          </div>
  </div>
        </nav>
    <div class="container bg-white" style="min-height: 80vh;">
<br>
<br>
<br>
