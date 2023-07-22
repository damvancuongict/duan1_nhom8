<?php
<<<<<<< HEAD
    session_start();
=======
>>>>>>> 5589562e5ae5fb9ec627cce1caff3cafae6e760c
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "model/danhmuc.php";
    include "model/lophoc.php";
    include "global.php";
    include "model/taikhoan.php";
    $danhsach=loadall_danhmuc();
    include "view/header.php"; 
    $khoahoc =load8_khoahoc_home();
    $lopch = loadall_lop();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'dangkylop':
                include "view/dangkylop.php";
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
<<<<<<< HEAD
            case 'dangky': 
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    insert_user($username,$password,$email,$address,$tel);
                    $thongbao="Đăng ký thành công";
                }
                include "view/dangky.php";
                break;
            case 'dangnhap': 
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $checkuser=checkuser($username, $password);
                   
                    if(is_array($checkuser)){
                        $_SESSION['username']=$checkuser; 
                        // $thongbao="Đăng nhập thành công";
                        header('Location: index2.php');
                }else{
                    $thongbao="Tài khoản không tồn tại! Vui lòng kiểm tra lại và đăng ký!";
                }
            }
                include "view/dangnhap.php";
                break;
            case 'capnhattk': 
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iduser=$_POST['iduser'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                   
                    update_tk($iduser,$username,$password,$email,$address,$tel);
                    $thongbao="Cập nhật thành công";
                        header('Location: index2.php?act=capnhattk');
                
            }
                include "view/dangnhap.php";
                break;
               
=======

        
>>>>>>> 5589562e5ae5fb9ec627cce1caff3cafae6e760c
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

            default:
               include "index2.php";
                break;
        }
    } else {
        include "view/home.php";
    }
  
    include "view/footer.php";
?>
