
<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themewin.com/edurock-preview/edurock/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jul 2023 15:56:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Index | Edurock - Education LMS Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
 .cart-icon {
    font-size: 30px; 
    
}
.giohang{
     margin-left:890px;   
    margin-right:20px;  
}
.nguoidung{
     margin-left:20px;   
    margin-right:80px;  
}
.bandau{
    width: 100%;
    height: 45px;
    background-color:#263546;
    margin-button:10px;
}
.headerarea__right {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /* CSS cho phần chứa 'Hello người dùng' */
  .nguoidung {
    display: flex;
    align-items: center;
  }
 p{
    margin-top: 15px;
  }

  /* CSS cho ảnh */
  .nguoidung img {
    margin-right: 10px;
  }

  /* CSS cho phần tử chứa 'Quản lý' và 'Đăng xuất' */
  .quanly,
  .dangxuat {
    display: flex;
    margin-left: 10px;
    margin-right: 10px;
    
  }
  .quanly1, .hello{
    margin-right: 20px;
    margin-left: 10px;
  }

  /* Optional: Thay đổi màu chữ và hoạt động khi di chuột qua các liên kết */
  a.dn{
    color:white; /* Màu chữ liên kết */
    text-decoration: none; /* Loại bỏ gạch chân liên kết */
    border: 2px solid yellow;
    display: inline-block;
    padding: 6px 10px;
  }
  a.dn:hover{
    color: #000000; /* Màu chữ khi di chuột qua liên kết */
    background-color:#FFCC00;
  }
  .quanly a,
  .dangxuat a {
    color:white; /* Màu chữ liên kết */
    text-decoration: none; /* Loại bỏ gạch chân liên kết */
    border: 2px solid yellow;
    display: inline-block;
    padding: 6px 10px;
  }

  .quanly a:hover,
  .dangxuat a:hover {
    color: #000000; /* Màu chữ khi di chuột qua liên kết */
    background-color:#FFCC00;
  }
 

  .sarechbox form {
    display: flex;
    align-items: center;
  }

  .sarechbox input[type="text"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-right: 5px;
  }

  .sarechbox input[type="submit"] {
    padding: 5px 10px;
    background-color:#263546;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }

  /* Optional: Định dạng nút khi di chuột qua */
  .sarechbox input[type="submit"]:hover {
    background-color:#FFCC00;
    color:#000000;
  }
  
</style> 
</head>

<body class="body__wrapper">
    
    <main class="main_wrapper">
        <!-- header section start -->
        
        <header>
               

            <div class="headerarea transparent__header header__sticky header__area">
            <div class="bandau">
            <div class="headerarea__right">
                                <?php 
                                    if(isset($_SESSION['user'])){
                                        // $_SESSION['role'] = "1";
                                        // $_SESSION['role'] = "0";
                                        extract($_SESSION['user']);
                                        // $sql = "SELECT user.role FROM user";
                                        $_SESSION['role']= "SELECT * FROM user WHERE `role` = '$role'";
                                        // var_dump($_SESSION['role']);
                                        if((isset($_SESSION['role']) && $role == "1")){
                                        ?>
                                       
                                        <div style="width:500px; margin-right: 10px" class="nguoidung">
                                            <i class="fa-solid fa-user" style=" width:30px height:30px "></i>                                          
                                            <span class="hello" style="color: white;">Xin Chào</span> <p style="color: white;"><?=$username?></p>
                                            
                                        </div> 
                                        <div class="quanly">
                                        <div class="quanly1">
                                            <a href="admin/index.php">Quản lý</a>
                                        </div>
                                        <div class="dangxuat" >
                                            <a href="index2.php?act=thoat">Đăng xuất</a>
                                        </div></div>
                                    <?php
                                    }
                                   else{
                                        ?>
                                        <div style="width:500px; margin-right: 10px" class="nguoidung">
                                            <i class="fa-solid fa-user" style=" width:30px height:30px "></i>                                          
                                            <span class="hello" style="color: white;">Xin Chào</span> <p style="color: white;"><?=$username?></p>
                                            
                                        </div> 
                                    
                                        <div class="giohang">
                                        <?php
                                            $lopnguoidung = thongtinlopcuanguoidung();
                                            $soLuongDangKy = count($lopnguoidung);
                                            ?>
                                            <a href="index2.php?act=canhan">
                                                <i class="fa-solid fa-cart-shopping cart-icon"></i>
                                            <span><?php echo $soLuongDangKy; ?></span>
                                        </a>
                                        </div>
                                        <div class="dangxuat" >
                                            <a href="index2.php?act=thoat">Đăng xuất</a>
                                            </div>
                                        <?php
                                        }

                                    }else{
                                        ?>                                
                                    
                                    <div class="headerarea__login" style="width:100%">
                                     <a class="dn" href="index2.php?act=dangnhap" style="margin-right: 10px">Đăng nhập</a>
                                        <a class="dn" href="index2.php?act=dangky" >Đăng ký</a>
                                    </div>
                                <?php } ?>
                                
                            </div>
                </div>
                <div class="container desktop__menu__wrapper">
                     
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="headerarea__left">
                                <div class="headerarea__left__logo">

                                    <a href="index.html"><img src="img/logo/logo_1.png" alt="logo"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 main_menu_wrap">
                            <div class="headerarea__main__menu">
                            <nav>
                                    <ul>
                                        <li>
                                        <a class="headerarea__has__dropdown" href="index2.php">Trang chủ</a>
                                        </li>
                                        <li>
                                        <a class="headerarea__has__dropdown" href="blog.html">Giới thiệu<i class="icofont-rounded-down"></i></a>
                                        <ul class="headerarea__submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                        </ul>
                                        </li>
                                        <li>
                                        <a class="headerarea__has__dropdown" href="index2.php">Danh mục<i class="icofont-rounded-down"></i></a>
                                        <ul class="headerarea__submenu">
                                            <?php
                                            foreach ($danhsach as $dm) {
                                            extract($dm);
                                            $linkdm = "index2.php?act=khoahoc&iddm=" . $iddm;
                                            echo '<li>
                                                    <a href="' . $linkdm . '">' . $tendm . '</a>
                                                    </li>';
                                            }
                                            ?>
                                            
                                            
                                        </ul>
                                        </li>
                                        
                                        <li>
                                                <div class="boxfooter sarechbox">
                                                    <form action="index2.php?act=timkiemkh" method="post">
                                                        <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm..">
                                                        <input type="submit" name="timkiem" value="Tìm Kiếm">
                                                    </form> 
                                                </div>
                                        </li>
                                        
                                        
                                    </ul>
                                        
                                    </nav>
                                       
                           
                        </div> 
                       
                    </div>
                </div>
                
            </div>
        </header>
       
        <!-- header section end -->
         <!-- theme fixed shadow -->
         <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>