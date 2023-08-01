<?php

    if(is_array($listtaikhoan)){
        extract($listtaikhoan);
        // var_dump($listtaikhoan);
    }
?>
<div class="row" style="margin-left: 30%">
            <div class="row formtitle" style="padding-top: 10%">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post"  enctype="multipart/form-data">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="username" value="<?=$username?>" >
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="text" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br>
                        <input type="text" name="address" value="<?= $address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại <br>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        Vai trò <br>
                        <input type="text" name="role" value="<?=$role?>">
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="iduser" value="<?=$iduser?>">
                        <!-- <?php var_dump($iduser)?> -->
                        <input type="submit" name="capnhat" value="cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=taikhoan"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                            echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>