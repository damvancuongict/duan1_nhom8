<?php
    include "view/header.php";
    include "model/pdo.php";
    include "model/khoahoc.php";
    include "global.php";

    $spnew = load8_khoahoc_home();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'khoahoc':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                     
                }else{
                    $iddm=0;
                }
                $dssp=loadds_khoahoc($kyw, $iddm);
                $tendm=loadten_danhmuc($iddm);
                include "view/khoahoc.php";
                break;

            case 'khoahoc':
                // Xử lý khi 'act' là 'sanphamct'
                break;

            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

    include "view/footer.php";
?>
