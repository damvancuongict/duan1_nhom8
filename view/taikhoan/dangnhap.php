<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <script src="./../js/validater.js"></script> -->
   <style>
.error {
    color: #FF0000;
}
</style>
</head>

<body>
   <div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading">Log in</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index2.php">Home</a></li>
                            <li>Log in</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="shape__icon__2">
        <img class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png" alt="photo">
    </div>

</div>

<div class="gridarea">
    <div class="container">
        <div>
            <div class="gridarea__wraper">
                <div class="gridarea__img">
                <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <div class="login__heading">
                                        <h5 class="login__title">Log in</h5>
                                        <p class="login__description">Don't have an account yet? <a href="index2.php?act=dangky"  style="color:#66B2FF">Sign up for free</a></p>
                                    </div>

<?php
// define variables and set to empty values
$userErr = $passErr = "";
$user = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "Bạn chưa nhập username";
  } 
//   else {
//     $user = test_input($_POST["user"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$user)) {
//       $userErr = "Chỉ cho phép chữ cái và khoảng trắng";
//     }
//   }
  

    if (empty($_POST["pass"])) {
      $passErr = "Bạn chưa nhập password";
    } else {
      $pass = test_input($_POST["pass"]);
      //Xác thực mật khẩu: phải chứa ít nhất 1 chữ cái và số. Cho phép các ký tự !@#$% và có 6-15 ký tự
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,15}$/', $pass))
    {
        $passErr = "Sai mật khẩu! Mật khẩu phải chứa ít nhất 1 chữ cái và số có 6-15 ký tự";
      }
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
                                    <form action="index2.php?act=dangnhap" method="post" id="form1">
                                    <!-- <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" > -->
                                        <div class="row">
                                            <div class="col-xl-6">
                                           
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Username</label>
                                                    <input id="username" class="common__login__input" style="width:1010px;height:50px" type="text" name="user" placeholder="Username" value="<?php echo $user;?>">
                                                    <span class="error" style="margin-left: -40px"> <?php echo $userErr;?></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <!-- <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Email</label>
                                                    <input id="email" class="common__login__input" style="width:1010px;height:50px" type="text" name="email" placeholder="Your Email" value="<?php echo $email;?>">
                                                    <span class="error" style="margin-left: -70px"> <?php echo $emailErr;?></span>
                                                </div> -->
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Password</label>
                                                    <input id="password" class="common__login__input" style="width:1010px;height:50px" type="password" name="pass" placeholder="Your Password" value="<?php echo $pass;?>">
                                                    <span class="error" style="display:inline-block;float:left;margin-left: 15px"> <?php echo $passErr;?></span>
                                                </div>
                                            </div>                                          
                                            <div class="col-xl-6">
                                            <div class="login__form d-flex justify-content-between flex-wrap gap-2" style="width:1000px">
                                                <div class="form__check">
                                                 <input id="accept_pp" type="checkbox"> <label for="accept_pp">Remember me</label>
                                                </div>
                                            </div>
                                        <div class="login__button">
                                            <input class="default__button" type="submit" id="btn" style="width: 1010px;height:50px;float:left;margin-bottom:20px" value="Log in" name="dangnhap">
                                        </div>
                                    </form>
                                    <br>
                                    <h5 class="thongbao" style="color:green;width:1000px">
                                        <?php
                                            if(isset($thongbao)&&($thongbao!="")){
                                                echo $thongbao;
                                            }
                                        ?>
                                    </h5>
                                    <h5 class="thongbao" style="color:red;width:1000px">
                                        <?php
                                            if(isset($thongbaoe)&&($thongbaoe!="")){
                                                echo $thongbaoe;
                                            }
                                        ?>
                                    </h5>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div> 
    </div>

