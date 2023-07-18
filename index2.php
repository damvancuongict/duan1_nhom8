<?php
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "model/danhmuc.php";
<<<<<<< HEAD
    include "model/lop.php";
=======
    include "model/lophoc.php";
>>>>>>> 37a12a8476c90912e101ed25170468710e15abed
    include "global.php";
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
