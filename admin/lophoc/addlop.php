<?php
    session_start();
    ob_start();
?>
<div class="row header" ><h1>THÊM MỚI LỚP HỌC</h1></div>
        <div class="row formcontend" >
            <form action="index.php?act=addlop" method="post" enctype="multipart/form-data">
                <div class="row mb">
                    <label for="">Khóa học</label><br>
                     <select name="idkhoahoc" id="">
                        <?php
                            foreach ($listkh as $khoahoc) {
                                extract($khoahoc);
                                echo '<option value="'.$idkhoahoc.'">'.$tenkhoahoc.'</option>';
                            }
                        ?>
                     </select>
                </div>
                
                <div class="row mb10">
                    <label for="">Tên lớp</label><br>
                     <input type="text" name="tenlop" id="" >
                </div>
                <div class="row mb">
                    <label for="">Giáo viên</label><br>
                     <select name="iduser" id="">
                        <?php
                        // $role = checkuser($username,$password);
                        // $_SESSION['role'] = $role;
                        // if($role==2){
                            
                        //     foreach ($listuser as $user) {
                        //         extract($user);
                                
                        //         // if($iduser==$iduser) $s="selected"; else $s="";
                        //         //  echo '<option value="'.$iduser.'" '.$s.'>'.$username.'</option>';
                        //         echo '<option value="'.$iduser.'">'.$username.'</option>';
                        //     }
                        // } else{
                        //     echo 'ok';
                        // }
                        // foreach ($listtk as $user) {
                        //     extract($user);
                        //     echo '<option value="'.$iduser.'">'.$username.'</option>';
                        // }
                        foreach ($listtk as $taikhoan) {
                            extract($taikhoan);
                            echo '<option value="'.$iduser.'">'.$username.'</option>';
                        }
                        ?>
                     </select>
                </div>
                <div class="row mb10">
                    <label for="">Ca học</label><br>
                     <input type="text" name="cahoc" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Ngày bắt đầu</label><br>
                     <input type="text" name="ngaybatdau" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Ngày kết thúc</label><br>
                     <input type="text" name="ngayketthuc" id="" >
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listlop"><input type="button" value="Danh Sách"></a>
                    
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>