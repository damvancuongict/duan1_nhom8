<?php
    session_start();
 
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "model/danhmuc.php";
    include "model/lophoc.php";
    include "model/dangkylop.php";
    include "global.php";
    include "model/taikhoan.php";
    $danhsach=loadall_danhmuc();
    include "view/header.php"; 
    // include "view/taikhoan/dangnhap.php"; 
    if(!isset($_SESSION['mylop'])) $_SESSION['mylop']=[];
    $khoahoc =load8_khoahoc_home();
    $lopkh = loadall_lop_user();
    $lopnguoidung = thongtinlopcuanguoidung();
    $new =newclass();
    // $idlopw = loadall_idlop($idlop);
    $lopch = loadall_lop();

    $u = loadalltaikhoan();
    // $us =loadone_tk($iduser);
    // var_dump($iduser);
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
           
            case 'xoadklop':
                if (isset($_GET['idlop'])) {
                    array_slice($_SESSION['mylop'],$_GET['idlop'],1);
                }else{
                    $_SESSION['mylop']=[];
                }
                
                include "view/dangkylop.php";
                // header('Location: index2.php?act=dangkylop');
                break;
           
            case 'khoahoc':               
                    if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                       
                        $iddm=$_GET['iddm'];
                         $dskh=loadall_kh_danhmuc("",$iddm);
                    
                         include "view/khoahoc.php";
                     
                    }else{
                        include "view/home.php";
                    }
                   
                break;

            case 'thoat':

                        session_unset();
                        $yourURL="index2.php";
                        echo ("<script>location.href='$yourURL'</script>");
                        include "view/gioithieu.php";
                        break;
            case 'dangky': 
                        if(!empty($_POST["user"]) && !empty($_POST["email"]) && !empty($_POST["pass"]))
                        {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "duanmot";

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $sql = "INSERT INTO `user` (`username`,`password`,`email`) values('$user','$pass','$email')";
                            $thongbao = "Đã đăng ký thành công !<br> Vui lòng đăng nhập";
                            // use exec() because no results are returned
                            $conn->exec($sql);
                        }
                            //   header("Location: dangnhap.php");
                            // $yourURL="dangky.php";
                            // echo ("<script>location.href='$yourURL'</script>");
                            //   }
                        catch(PDOException $e)
                            {
                            echo $sql . "<br>" . $e->getMessage();
                            }

                        $conn = null;
                        }

            
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap': 
                //Nếu lỗi thì sẽ dừng việc gửi dữ liệu lên database
                if(!empty($_POST["user"]) && !empty($_POST["pass"]))
                {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "duanmot";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
                    $checkuser=checkuser($user, $pass);
                        if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        $thongbao = "Bạn đã đăng nhập thành công !";
                        $yourURL="index2.php";
                        echo ("<script>location.href='$yourURL'</script>");
                        exit;
                    }else{
                        $thongbaoe="Tài khoản không tồn tại, vui lòng kiểm tra hoạc đăng ký";
                    }
                    
                    // use exec() because no results are returned
                    $conn->exec($sql);
                }                
                catch(PDOException $e)
                    {
                    echo $sql . "<br>" . $e->getMessage();
                    }

                $conn = null;
                }       
                include "view/taikhoan/dangnhap.php";
                break;
                
            
            case 'dangkykhoahoc':
                if(isset($_GET['idkhoahoc'])&&($_GET['idkhoahoc']>0)){
                    $id=$_GET['idkhoahoc'];
                    $kh=loadone_khoahoc($id);
                    extract($kh);

                    
                   include "view/chitietdangkykhoahoc.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'dangkylop':
               
                if(isset($_GET['idlop'])&&($_GET['idlop']>0)){
                    $id=$_GET['idlop'];
                    $idlopw=loadall_idlop($id);
                    extract($idlopw);

                   
                   include "view/dangkylop.php";
                }else{
                    include "view/home.php";
                }
                break;
                case 'canhan':
                    if (isset($_SESSION['user'])) {
                        // Nếu đã đăng nhập, hiển thị trang cá nhân
                        include "view/canhan.php";}else {
                            include "view/home.php";
                        }
                    break;
                case 'dangkydanhsachlop':
                    if (isset($_POST['idlop']) && $_POST['idlop']) {
                        $idlop = $_POST['idlop'];
                        $iduser = $_POST['iduser'];
                        $trangthai = $_POST['trangthai'];
                        insert_dangky($idlop, $trangthai, $iduser);
                        include "view/thongbao.php";
                    } else {
                        include "view/home.php";
                    }
                    break;
                    
                
           
            default:
               include "index2.php";
                break;
        }
    } else {
        include "view/home.php";
    }
  
    include "view/footer.php";
?>
