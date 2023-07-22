<?php
    session_start();
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "model/danhmuc.php";
    include "model/lophoc.php";
    include "global.php";
    $danhsach=loadall_danhmuc();
    include "view/header.php"; 
    $khoahoc =load8_khoahoc_home();
    $lopch = loadall_lop();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'addlop':
                // // Kiểm tra và khởi tạo biến $_SESSION['addlop'] nếu nó chưa tồn tại hoặc không phải là một mảng
                // if (!isset($_SESSION['addlop']) || !is_array($_SESSION['addlop'])) {
                //     $_SESSION['addlop'] = array();
                // }
    
                // if (isset($_POST['idlop']) && $_POST['idlop']) {
                   
                //     $tenlop = $_POST['tenlop'];
                //      $idlop = $_POST['idlop'];
                //     $gia = $_POST['gia'];
                //     $ngaybatdau = $_POST['ngaybatdau'];
                //     $ngayketthuc = $_POST['ngayketthuc'];
                //     $username = $_POST['username'];
                //     $addlop = [$idlop, $tenlop, $gia, $ngaybatdau, $ngayketthuc, $username];
                //     $_SESSION['addlop'][] = $addlop;
                // }
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
               
                break;
        }
    } else {
        include "view/home.php";
    }
  
    include "view/footer.php";
?>
