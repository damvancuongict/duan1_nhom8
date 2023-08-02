
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="view/style.css">   
    <style>
  
</style> 
</head>

<body class="body__wrapper">
    <main class="main_wrapper">
        <!-- header section start -->
        <header>
            <div class="headerarea transparent__header header__sticky header__area">
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
                                        <li><a class="headerarea__has__dropdown" href="index2.php">Trang chủ
                                        <!-- <i class="icofont-rounded-down"></i></a>
                                            <ul class="headerarea__submenu ">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-dark.html">Home 1 (Dark)</a></li>
                                                <li><a href="home-2.html">Home Style 2</a></li>
                                                <li><a href="home-2-dark.html">Home 2 (Dark)</a></li>
                                                <li><a href="home-3.html">Home Style 3</a></li>
                                                <li><a href="home-3-dark.html">Home 3 (Dark)</a></li>
                                                <li><a href="home-4.html">Home 4 </a></li>
                                                <li><a href="home-4-dark.html">Home 4 (Dark)</a></li>
                                                <li><a href="home-5.html">Home 5 </a></li>
                                                <li><a href="home-5-dark.html">Home 5 (Dark)</a></li>
                                                <li><a href="home-6.html">Home 6 </a></li>
                                                <li><a href="home-6-dark.html">Home 6 (Dark)</a></li>
                                            </ul>
                                        </li> -->

                                        <!-- <li><a class="headerarea__has__dropdown" href="about.html">About -->
                                      
                                    </a>

                                        </li>
                                        <li><a class="headerarea__has__dropdown" href="blog.html">Giới thiệu
                                        <i class="icofont-rounded-down"></i>
                                        </a>
                                            <ul class="headerarea__submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                                <li><a href="blog-details.html">Blog-details</a></li>
                                                <li><a href="blog-details-dark.html">Blog-details (Dark)</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="headerarea__has__dropdown" href="index2.php">Danh mục
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                            <ul class="headerarea__submenu">
                                            <?php
                                                    foreach ($danhsach as  $dm) {
                                                        extract($dm);
                                                        $linkdm="index2.php?act=khoahoc&iddm=".$iddm;
                                                        echo '<li>
                                                                <a href="'.$linkdm.'">'.$tendm.'</a>
                                                            </li>';
                                                    }                                                 
                                            ?>                            
                                            </ul>
                                        </li>
                                        <li><a class="headerarea__has__dropdown" href="instructor.html">Tin tức
                                        <!-- <i class="icofont-rounded-down"></i> </a>
                                            <ul class="headerarea__submenu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="about-dark.html">About (Dark)</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="contact-dark.html">Contact (Dark)</a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="instructor-details.html">Instructor-Details</a></li>
                                                <li><a href="instructor-details-dark.html">Details (Dark)</a></li>
                                                <li><a href="event-details.html">Event-Details</a></li>
                                                <li><a href="event-details-dark.html">Details (Dark)</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="login-dark.html">Login (Dark)</a></li>
                                                <li><a href="error.html">Error</a></li>
                                                <li><a href="error-dark.html">Error (Dark)</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.html">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="headerarea__right">
                            <!-- <img src="img/user.jpg" alt="" width="25px" height="25px"> -->
                                <?php 
                                    if(isset($_SESSION['user'])){
                                        extract($_SESSION['user']);
                                ?>
                                        <div style="width: 30px;margin-right: 10px">
                                            <img src="img/user.jpg" alt="" width="30px" height="30px" style="margin-right:20px">
                                            <span style="color: red;">Hello</span> <?=$username?>
                                            
                                        </div>
                                        <div class="headerarea__login">
                                            <a href="admin/index.php">Quản lý</a>
                                        </div>
                                        <div class="headerarea__login" >
                                            <a href="index2.php?act=thoat">Đăng xuất</a>
                                        </div>
                                <?php
                                    }else{
                                        ?>
                                   
                                <div class="headerarea__login" style="width:100%">
                                    <a href="index2.php?act=dangnhap">Đăng nhập</a>
                                </div>
                                <div class="headerarea__login" style="width:100%">
                                    <a href="index2.php?act=dangky" >Đăng ký</a>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mob_menu_wrapper">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a class="logo__dark" href="#"><img src="img/logo/logo_1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">

                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- header section end -->
        