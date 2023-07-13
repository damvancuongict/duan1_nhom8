<?php

    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI DANH MỤC</h1> //Tien da den day
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã danh mục <br>
                        <input type="text" name="makhoahoc" disabled>
                    </div>
                    <div class="row mb10">
                        Tên danh mục <br>
                        <input type="text" name="tenkhoahoc" value="<?php if(isset($tendm)&&($tendm!="")) echo $tendm;?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($iddm)&&($iddm!="")) echo $iddm;?>">
                        <input type="submit" name="capnhat" value="cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                            echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>