<?php 
if(is_array($khoahoc)){
    extract($khoahoc);
}
$hinhpath="../upload/".$anh;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh="no photo";
}
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT KHÓA HỌC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatekh" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if($iddm==$idkhoahoc) $s="selected"; else $s="";
                                 echo '<option value="'.$idkhoahoc.'" '.$s.'>'.$tenkhoahoc.'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        Tên khóa học<br>
                        <input type="text" name="tenkhoahoc" value="<?= $tenkhoahoc?>">
                    </div>               
                    <div class="row mb10">
                        Giá<br>
                        <input type="text" name="gia" value="<?= $gia?>">
                    </div>               
                    <div class="row mb10">
                        Hình<br>
                        <input type="file" name="hinh">
                        <?= $hinh?>
                    </div>               
                    <div class="row mb10">
                        Mô tả<br>
                       <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>               
                               
                    <div class="row mb10">  
                        <input type="hidden" name="idkhoahoc" value="<?=$idkhoahoc?>">                     
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listkh">
                            <input type="button" value="Danh sách">
                        </a>                     
                    </div>  
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>             
                </form>
            </div>
        </div>
    </div>