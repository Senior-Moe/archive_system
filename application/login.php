<?php
session_start();
include_once "connect_database.php";

if(isset($_POST['user_email']) && isset($_POST['user_password'])) {
	function validation($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
    $user_email = validation($_POST['user_email']);
    $user_password = validation($_POST['user_password']);

if(empty($user_email)){
    header("Location: ../index.php?error=أدخل البريد الإلكتروني");
    exit();
   }else if(empty($user_password)){
    header("Location: ../index.php?error=أدخل كلمة المرور");
    exit();
}else{

    $sql = "SELECT * FROM users WHERE user_email='$user_email'";
    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($user_password, $row['user_password']) && $row['user_email'] === $user_email){
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_email'] = $row['user_email'];
            header("Location: ../filemanager.php");
            exit();
        }else{
            header("Location: ../index.php?error=البريد الإلكتروني أو كلمة المرور غير صحيحة");
            exit();
            }
        }else{
            header("Location: ../index.php?error=البريد الإلكتروني أو كلمة المرور غير صحيحة");
            exit();
            }
}
}else{
    header("Location: ../index.php");
    exit();
}
