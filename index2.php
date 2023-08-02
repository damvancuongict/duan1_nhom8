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
    $lopch = loadall_lop_user();
    $u = loadalltaikhoan();
    // $us =loadone_tk($iduser);
    // var_dump($iduser);
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            // case 'dangkylop':
            //     if (isset($_POST['idlop']) && $_POST['idlop']) {
            //         $idlop = $_POST['idlop'] ?? null;
            //         $iduser = $_POST['iduser'] ?? null;
            //         dangkylop($idlop,$iduser);
            //     }
            //     // $us =loadone_tk($iduser);
                
            //     include "view/dangkylop.php";
            //     break;
            case 'xoadklop':
                if (isset($_GET['idlop'])) {
                    array_slice($_SESSION['mylop'],$_GET['idlop'],1);
                }else{
                    $_SESSION['mylop']=[];
                }
                
                include "view/dangkylop.php";
                // header('Location: index2.php?act=dangkylop');
                break;
            // case 'dangkylop':
            //     if (isset($_POST['idlop']) && ($_POST['idlop'])) {
            //         $idlop = $_POST['idlop'];
            //         $iduser = $_POST['iduser'];
            //         $cahoc = $_POST['cahoc'];
            //         $ngaybatdau = $_POST['ngaybatdau'];                 
            //         $gia = $_POST['gia'];
            //         $soluong =1;
            //         $thanhtien=$soluong*$gia;
            //         $addlop =[$idlop,$iduser,$cahoc,$ngaybatdau,$gia,$soluong,$thanhtien];
            //         array_push($_SESSION['mylop'],$addlop);
                    
                   
            //     }
              
            //     include "view/dangkylop.php";
            //     break;
            case 'khoahoc':               
                    if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                       
                        $iddm=$_GET['iddm'];
                         $dskh=loadall_kh_danhmuc("",$iddm);
                    
                         include "view/khoahoc.php";
                     
                    }else{
                        include "view/home.php";
                    }
                   
                break;
                case 'dangnhap':
                   
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $checkuser=checkuser($user, $pass);
                        if(is_array($checkuser))
                        $_SESSION['user']=$checkuser;                       
                       $yourURL="index2.php";
                        echo ("<script>location.href='$yourURL'</script>");
                        exit;
                        $thongbao = "Bạn đã đăng nhập thành công !";
                    }else{
                        $thongbao="Tài khoản không tồn tại, vui lòng kiểm tra hoạc đăng ký";
                    }

                    include "view/taikhoan/dangnhap2.php"; 
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

      
                // if(isset($_POST['dangky'])&&($_POST['dangky'])){
                //     $username=$_POST['user'];
                //     $password=$_POST['pass'];
                //     $email=$_POST['email'];
                //     insert_taikhoan($username,$password,$email);
                //     $thongbao = "Đã đăng ký thành công !<br> Vui lòng đăng nhập";
                // }
            
                include "view/taikhoan/dangky.php";
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
            // case 'thanhtoanchuyenkhoan':
               
               
                   
            //        include "view/thanhtoanchuyenkhoan.php";
               
                  
            //     break;
                // case 'adddangkylop':
             
                //     // kiểm tra xem người dùng có lick vào nút add hay không
                //     if(isset($_POST['xacnhan'])&&($_POST['xacnhan'])){
                //         $idlop = $_POST['xacnhan'];
                //         $trangthai = $_POST['trangthai'];
                //         $iduser = $_SESSION['iduser'];
                       
                //           insert_dangky($idlop,$trangthai,$iduser);
                //           $thongbao= "thêm thành công !";

                           
                //     }
                //    include "view/dangkylop.php";
                   
                //     break;

            default:
               include "index2.php";
                break;
        }
    } else {
        include "view/home.php";
    }
  
    include "view/footer.php";
?>
