<?php 
if(is_array($lophoc)){
    extract($lophoc);
}
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LỚP HỌC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatelop" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="idkhoahoc">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listkhoahoc as $khoahoc){
                                extract($khoahoc);
                                if($idkhoahoc==$idkhoahoc) $s="selected"; else $s="";
                                 echo '<option value="'.$idkhoahoc.'" '.$s.'>'.$tenkhoahoc.'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        Tên lớp học<br>
                        <input type="text" name="tenlop" value="<?= $tenlop?>">
                    </div>               
                    <div class="row mb10">
                        Giáo viên<br>
                        <input type="text" name="giaovien" value="<?= $tengiaovien?>">
                    </div>               
                    <div class="row mb10">
                        Ca học<br>
                        <input type="text" name="cahoc"> <?= $cahoc?>
                    </div>               
                    <div class="row mb10">
                        Ngày bắt đầu<br>
                        <!-- <textarea name="ngaybatdau" id="" cols="30" rows="10"><?=$ngaybatdau?></textarea> -->
                       <input type="text" name="ngaybatdau"> <?= $ngaybatdau?>
                    </div>  
                    <div class="row mb10">
                        Ngày kết thúc<br>
                       <input type="text" name="ngayketthuc"> <?= $ngayketthuc?>
                    </div>  
                                 
                               
                    <div class="row mb10">  
                        <input type="hidden" name="idlop" value="<?=$idlop?>">                     
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listlop">
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