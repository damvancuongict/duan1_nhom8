<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/khoahoc.php";
    include "../model/taikhoan.php";
    include "../model/lophoc.php";
    include "../model/dangky.php";
    // include "../model/binhluan.php";
    $listdanhmuc = loadall_danhmuc();
    $khoahoc=loadall_khoahoc();
    $dsdangkylop=thongtinlopcuanguoidungdangky();
    $dathanhtoan = dathanhtoan();
    $chuathanhtoan = chuathanhtoan();
    $taikhoanhocsinh = taikhoanhocvien();
    $taikhoangiaovien = taikhoangiaovien();
    $taikhoanadmin = taikhoanadmin();
    
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
                // $listdanhmuc = loadall_danhmuc();
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
                    include "khoahoc/addkh.php";
                    break;
                case 'addlop' :
                    // kiểm tra xem người dùng có lick vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $idkhoahoc=$_POST['idkhoahoc'];
                        $tenlop=$_POST['tenlop'];
                        $iduser=$_POST['iduser'];
                        $cahoc=$_POST['cahoc'];
                        $diadiemhoc=$_POST['diadiemhoc'];
                        $ngaybatdau=$_POST['ngaybatdau'];
                        
                        insert_lop($tenlop,$iduser,$cahoc,$ngaybatdau,$diadiemhoc,$idkhoahoc);
                        $thongbao= "thêm thành công !";
                    }
                    $listkh=loadall_khoahoc();
                    $listtk=loadall_lop_user();
                    // var_dump($listtk);
                    include "lophoc/addlop.php";
                    break;
                case 'chonkhoahoc':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $idkhoahoc=$_POST['idkhoahoc'];
                    }else{
                        $kyw='';
                        $idkhoahoc=0;
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listkh = loadall_khoahoc($kyw,$idkhoahoc);
                        include "lophoc/chonkhoahoc.php";
                    break;
                case 'lop':               
                        if(isset($_GET['idkhoahoc'])&&($_GET['idkhoahoc']>0)){
                            $idkhoahoc=$_GET['idkhoahoc'];
                        }
                            $listlop = loadall_lop_user();
                            include "lophoc/lop.php";
                    break;
                case 'listlop':
                    if(isset($_POST['listlop'])&&($_POST['listlop'])){
                        $kyw=$_POST['kyw'];
                        $idlop=$_POST['idlop'];
                    }else{
                        $kyw='';
                        $idlop=0;
                    }
                    $listlop = loadall_lop_user();
                    $danhsach=loadall_danhmuc();
                    include "lophoc/listlop.php";
                    break;
                case 'xoalop':
                    if(isset($_GET['idlop'])&&($_GET['idlop']>0)){
                        delete_lop($_GET['idlop']);
                    }
                    // $listlophoc = loadall_lop_user();
                    $listlop=loadall_lop("",0);
                    include "lophoc/listlop.php";
                    break;
                case 'sualop':
                    if(isset($_GET['idlop'])&&($_GET['idlop']>0)){
                        $lophoc =loadone_lop($_GET['idlop']);
                    }
                    $listkh = loadall_khoahoc();
                    $listtk = loadall_lop_user();
                    include "lophoc/updatelop.php";
                    break;
                case 'updatelop' :
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $idlop=$_POST['idlop'];
                        $idkhoahoc=$_POST['idkhoahoc'];
                        $tenlop=$_POST['tenlop'];
                        $iduser = $_POST['iduser'];
                        $cahoc=$_POST['cahoc'];
                        $diadiemhoc=$_POST['diadiemhoc'];
                        $ngaybatdau=$_POST['ngaybatdau'];
                        update_lop($idlop,$tenlop,$cahoc,$ngaybatdau,$diadiemhoc,$iduser,$idkhoahoc);                    
                        $thongbao="Cập nhật thành công";
                    }
                    $listtk = loadall_lop_user();
                    // var_dump($listtk);
                    $listkh = loadall_khoahoc();
                    include "lophoc/addlop.php";
                    break;
                case 'thongtinlophoc' : 
                    if(isset($_GET['idlop'])&&($_GET['idlop']>0)){
                        $idlop = ($_GET['idlop']);                                      
                    }
                   $thongtinlophoc = loadall_idlop($idlop);
                     $loadnguoidung=loadnguoidungralop($idlop);
                    // $ca4 =loccahoc();
                    
                    include "lophoc/thongtinlophoc.php";
                    break;
                case 'cahoc' : 
                    $cahoc1 =lophocca1();
                    $cahoc2 =lophocca2();
                    $cahoc3 =lophocca3();
                    $cahoc4 =lophocca4();
                    $cahoc5 =lophocca5();
                    $cahoc6 =lophocca6();
                    include "lophoc/cahoc.php";
                    break;
                case 'taikhoan':
                    $listtaikhoan=loadalltaikhoan();
                    include "taikhoan/listtk.php";
                    break;
                case 'deletetk':
                    if(isset($_GET['iduser'])&&($_GET['iduser']>0)){
                        delete_tk($_GET['iduser']);
                    }
                    $listtaikhoan=loadalltaikhoan();
                    include "taikhoan/listtk.php";
                    break;
                case 'suatk' :
                   
                    if(isset($_GET['iduser'])&&($_GET['iduser']>0)){
                        $mtaikhoan =loadone_taikhoan($_GET['iduser']);
                    }
                   
                    include "taikhoan/updatetk.php";
                   
                    break; 
                case 'updatetk' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iduser=$_POST['iduser'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $role=$_POST['role'];
                    update_tk($iduser,$username,$password,$email,$address,$tel,$role);
                    $thongbao="Cập nhật thành công";
                }
                $listtaikhoan = loadalltaikhoan();
                include "taikhoan/updatetk.php";
                break;
             case 'thongtintk':
                            if (isset($_GET['iduser']) && ($_GET['iduser'] > 0)) {
                                $iduser = isset($_GET['iduser']) ? intval($_GET['iduser']) : 0;
                                $lopmot = thongtinmotlop($iduser); // Gọi hàm loadone_lop() với tham số $iduser
                                // var_dump( $lopmot); // Hiển thị thông tin lấy được từ hàm
                            }
                        
                            $listtaikhoan = loadalltaikhoan();
                            include "taikhoan/thongtinhv.php";
                            break;
             case 'thongtingiaovien':
                            if (isset($_GET['iduser']) && ($_GET['iduser'] > 0)) {
                                $iduser = isset($_GET['iduser']) ? intval($_GET['iduser']) : 0;
                                $lopmot = thongtindaycaclop($iduser); // Gọi hàm loadone_lop() với tham số $iduser
                                // var_dump( $lopmot); // Hiển thị thông tin lấy được từ hàm
                            }
                        
                            $listtaikhoan = loadalltaikhoan();
                            include "taikhoan/thongtingiaovien.php";
                            break;
                case 'xoadangky' :
                    if(isset($_GET['iddangky'])&&($_GET['iddangky']>0)){
                        delete_dangky($_GET['iddangky']);
                    }
                    // $listtaikhoan=loadalltaikhoan();
                include "taikhoan/updatetk.php";
                break;
                case 'quanlydangky':
                
                include "dangky/dangky.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";
?>