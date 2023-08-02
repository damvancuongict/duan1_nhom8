<?php
    session_start();
    ob_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";

    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo $username;
        $role = checkuser($username,$password);
            $_SESSION['role'] = $role;
            if($iduser==$iduser) $s="selected"; else $s="";
                {
                    if($role=="2"){
                        echo '<option value="'.$iduser.'">'.$username.'</option>';
                    }else{
                        echo 'Học sinh';
                    }   
                }
                
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="username" id="">   
            <input type="text" name="password" id="">
            <input type="submit" name="dangnhap" value="Đăng nhập">
        </form>
    </div>
</body>
</html>