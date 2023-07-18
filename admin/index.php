<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/khoahoc.php";
    include "../model/taikhoan.php";
    include "../model/lophoc.php";
    // include "../model/binhluan.php";
    include "header.php";
    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                //kiểm tra người dùng có click vào add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tendanhmuc=$_POST['tendanhmuc'];
                    insert_danhmuc($tendanhmuc);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/adddm.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    delete_danhmuc($_GET['iddm']);
                    $thongbao="Xóa thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'suadm' :
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $dm=loadone_danhmuc($_GET['iddm']);
                }
                include "danhmuc/updatedm.php";
                break;
            case 'updatedm' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendm=$_POST['tendanhmuc'];
                    $iddm=$_POST['iddm'];
                    update_danhmuc($iddm,$tendm);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/adddm.php";
                break;
                
                //controler  KHOÁ HỌC
            case 'addkh':
                    // kiểm tra xem người dùng có lick vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tenkh=$_POST['tenkh'];
                        $gia=$_POST['giakh'];
                        $mota=$_POST['mota'];
                        $filename=$_FILES['anh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                           // echo "The file ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " has been uploaded.";
                          } else {
                           // echo "Sorry, there was an error uploading your file.";
                          }
                          insert_khoahoc($tenkh,$gia,$filename,$mota,$iddm);
                        $thongbao= "thêm thành công !";
                    }
                    $listdm=loadall_danhmuc();
                    //var_dump($listdm);
                    include "khoahoc/addkh.php";
                    break;

            case 'listkh':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $idkhoahoc=$_POST['idkhoahoc'];
                }else{
                    $kyw='';
                    $idkhoahoc=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listkh = loadall_khoahoc($kyw,$idkhoahoc);             
                include "khoahoc/listkh.php";
                break;
            case 'xoakh':
                if(isset($_GET['idkhoahoc'])&&($_GET['idkhoahoc']>0)){
                    delete_khoahoc($_GET['idkhoahoc']);
                }
                $listkh=loadall_khoahoc("",0);
                include "khoahoc/listkh.php";
                break;
            case 'suakh' :
                if(isset($_GET['idkhoahoc'])&&($_GET['idkhoahoc']>0)){
                    $khoahoc =loadone_khoahoc($_GET['idkhoahoc']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "khoahoc/updatekh.php";
                break;
            case 'updatekh' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $idkhoahoc=$_POST['idkhoahoc'];
                    $iddm=$_POST['iddm'];
                    $tenkh=$_POST['tenkhoahoc'];
                    $gia=$_POST['gia'];
                    $mota=$_POST['mota'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["tenkhoahoc"])). " has been uploaded.";
                      } else {
                      // echo "Sorry, there was an error uploading your file.";
                      }
                    update_khoahoc($idkhoahoc,$tenkh,$gia,$filename,$mota,$iddm);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listkh = loadall_khoahoc("",0);
                include "khoahoc/addkh.php";
                break;
            case 'addlop' :
                // kiểm tra xem người dùng có lick vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $idkhoahoc=$_POST['idkhoahoc'];
                    $tenlop=$_POST['tenlop'];
                    $username=$_POST['username'];
                    $cahoc=$_POST['cahoc'];
                    $ngaybatdau=$_POST['ngaybatdau'];
                    $ngayketthuc=$_POST['ngayketthuc'];
                    
                      insert_lophoc($tenlop,$username,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc);
                    $thongbao= "thêm thành công !";
                }
                $listkh=loadall_khoahoc();
                //var_dump($listdm);
                include "lophoc/addlop.php";
                break;

                case 'taikhoan':
                    $listtaikhoan=loadalltaikhoan();
                    include "taikhoan/list.php";
                    break;
    //         case 'dsbl':
    //             $listbinhluan=loadall_binhluan(0);
    //             include "binhluan/list.php";
    //             break;
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";
?>