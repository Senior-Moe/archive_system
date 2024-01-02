<?php
include_once "connect_database.php";

if(isset($_POST['first_name']) && isset($_POST['user_email']) && isset($_POST['set_password']) && isset($_POST['repeat_password'])){
	function validation($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
    $user_name = validation($_POST['first_name']);
    $user_email = validation($_POST['user_email']);
    $password = validation($_POST['set_password']);
    $repeat = validation($_POST['repeat_password']);
        if(empty($user_name)){
            header("Location: ../pages/register.php?sign_error=أدخل الإسم");
            exit();
        }
        else if(empty($user_email)){
            header("Location: ../pages/register.php?sign_error=أدخل البريد الإلكتروني");
            exit();
        }
        else if(empty($password)){
            header("Location: ../pages/register.php?sign_error=أدخل كلمة المرور");
            exit();
        }
        else if(empty($repeat)){
            header("Location: ../pages/register.php?sign_error=تأكيد كلمة المرور");
            exit();
        }
        else if($password != $repeat){
            header("Location: ../pages/register.php?sign_error=كلمات المرور غير متطابقة");
            exit();
        }else{
            $check ="SELECT * FROM users WHERE user_email='$user_email'";
            $result_check = mysqli_query($connection,$check);
            if(mysqli_num_rows($result_check) === 1){
            header("Location: ../pages/register.php?sign_error=البريد الإلكتروني مسجل سابقا");
            exit();
            }else{
               // $date_reg =  date(DATE_RFC2822);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $connection->prepare("INSERT INTO users (user_email, user_password, username) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $user_email, $hashed_password, $user_name);
                $stmt->execute();
                $stmt->close();
                $connection->close();
                header("Location: ../pages/register.php?status=تم التسجيل بنجاح");
                exit();
                }
    }
}else{
            header("Location: ../pages/register.php");
            exit();
}
