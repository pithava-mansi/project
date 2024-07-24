<?php
  //  include 'admin/error.php';
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:dashboard.php");
      exit();
  }
  // Include database connectivity
    
  include_once('admin/controller/database/db.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $conn->real_escape_string($_POST['username']);
      $password = $conn->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $sql  = "SELECT * FROM users WHERE username = '$username'";

        $result =mysqli_query($conn,$sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['user_role'];
            $_SESSION['USERNAME'] = $row['username'];
            if(0==$row['user_role']){
            header("Location:admin/index.php");//admin
            }elseif(1==$row['user_role']){
                header("Location:admin/index.php");//client
            }elseif(2==$row['user_role']){
                header("Location:dashboard.php");//user
            }
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agrimart</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php'?>
<?php include 'slider.php';?>
    
    
    <?php include 'js.php'; ?>
</body>

</html>