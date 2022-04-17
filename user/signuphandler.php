<?php
require_once '../config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$output="";
if(empty($name) || empty($email) || empty($mobile) || empty($password))
{
  $output = '<div class="alert alert-danger">error occured try again</div>';
}else {

  $sql = "INSERT INTO login (user_id,username,password,name,mobile) VALUES (?,?,?,?,?)";
  $stmt = mysqli_prepare($link,$sql);
  mysqli_stmt_bind_param($stmt,'issss',$param_id,$param_username,$param_password,$param_name,$param_mobile);
  $param_id = '';
  $param_username= $email;
  $param_password = password_hash($password,PASSWORD_DEFAULT);
  $param_name = $name;
  $param_mobile = $mobile;

  if(mysqli_stmt_execute($stmt))
  {
    $output = '<div class="alert alert-success">
    <div class="alert-header">Signup Successful</div>
    Taking you to login page. please wait .. <img src="images/check.gif" width="100" height="100"></div>';
  }else{
        $output = '<div class="alert alert-danger">Error Occured</div>';
  }

}

echo $output;


?>
