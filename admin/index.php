<?php
    include "../model/pdo.php";
    pdo_get_connection();
    include "../model/danhmuc.php";
    // include "../model/sanpham.php";
    // include "../model/taikhoan.php";
    // include "../model/binhluan.php";
    include "header.php";
    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                //kiểm tra người dùng có click vào add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenkhoahoc=$_POST['tenkhoahoc'];
                    insert_danhmuc($tenkhoahoc);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/adddm.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'suadm' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/updatedm.php";
                break;
            case 'updatedm' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendm=$_POST['tenkhoahoc'];
                    $iddm=$_POST['id'];
                    update_danhmuc($iddm,$tendm);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/adddm.php";
                break;
                //controler  phần sản phẩm
                case 'addkh':
                    // kiểm tra xem người dùng có lick vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $gia=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $filename=$_FILES['anhsp']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                        if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                           // echo "The file ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " has been uploaded.";
                          } else {
                           // echo "Sorry, there was an error uploading your file.";
                          }
                        insert_sanpham($tensp,$gia,$filename,$mota,$iddm);
                        $thongbao= "thêm thành công !";
                    }
                    $listdm=loadall_danhmuc();
                    //var_dump($listdm);
                    include "khoahoc/addkh.php";
                    break;
            /*controller sản phẩm */

    //         case 'addsp':
    //             if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
    //                 $iddm=$_POST['iddm'];
    //                 $tensp=$_POST['tensp'];
    //                 $giasp=$_POST['giasp'];
    //                 $mota=$_POST['mota'];
    //                 $hinh=$_FILES['hinh']['name'];
    //                 $target_dir = "../upload/";
    //                 $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    //                 if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
    //                   //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    //                   } else {
    //                   // echo "Sorry, there was an error uploading your file.";
    //                   }

    //                 insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
    //                 $thongbao="Thêm thành công";
    //             }
    //             $listdanhmuc = loadall_danhmuc();
    //             //var_dump($listdanhmuc);
    //             include "sanpham/add.php";
    //             break;
    //         case 'listsp':
    //             if(isset($_POST['listok'])&&($_POST['listok'])){
    //                 $kyw=$_POST['kyw'];
    //                 $iddm=$_POST['iddm'];
    //             }else{
    //                 $kyw='';
    //                 $iddm=0;
    //             }
    //             $listdanhmuc = loadall_danhmuc();
    //             $listsanpham = loadall_sanpham($kyw,$iddm);
    //             include "sanpham/list.php";
    //             break;
    //         case 'xoasp':
    //             if(isset($_GET['id'])&&($_GET['id']>0)){
    //                 delete_sanpham($_GET['id']);
    //             }
    //             $listsanpham=loadall_sanpham("",0);
    //             include "sanpham/list.php";
    //             break;
    //         case 'suasp' :
    //             if(isset($_GET['id'])&&($_GET['id']>0)){
    //                 $sanpham =loadone_sanpham($_GET['id']);
    //             }
    //             $listdanhmuc = loadall_danhmuc();
    //             include "sanpham/update.php";
    //             break;
    //         case 'updatesp' :
    //             if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
    //                 $id=$_POST['id'];
    //                 $iddm=$_POST['iddm'];
    //                 $tensp=$_POST['tensp'];
    //                 $giasp=$_POST['giasp'];
    //                 $mota=$_POST['mota'];
    //                 $hinh=$_FILES['hinh']['name'];
    //                 $target_dir = "../upload/";
    //                 $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    //                 if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
    //                   //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    //                   } else {
    //                   // echo "Sorry, there was an error uploading your file.";
    //                   }
    //                 update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
    //                 $thongbao="Cập nhật thành công";
    //             }
    //             $listdanhmuc = loadall_danhmuc();
    //             $listsanpham = loadall_sanpham("",0);
    //             include "sanpham/add.php";
    //             break;
    //         case 'dskh':
    //             $listtaikhoan=loadall_taikhoan();
    //             include "taikhoan/list.php";
    //             break;
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