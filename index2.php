<?php
    include "view/header.php";
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "model/lophoc.php";
    include "global.php";

    $spnew = load8_khoahoc_home();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'khoahoc':
                // if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                //     $kyw=$_POST['kyw'];
                // }else{
                //     $kyw="";
                // }
                // if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                //     $iddm=$_GET['iddm'];
                     
                // }else{
                //     $iddm=0;
                // }
                // $dssp=loadds_khoahoc($kyw, $iddm);
                // $tendm=loadten_danhmuc($iddm);
                // include "view/khoahoc.php";
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
