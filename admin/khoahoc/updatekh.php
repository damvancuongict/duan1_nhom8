<style>
    .table {
    width: 400px;
    margin-top: 25px;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    background-color: #f9f9f9;
    margin-right:800px;
}
.formtitle {
    text-align: center;
    margin-bottom: 20px;
}

.formcontent {
    text-align: center;
}

.row {
    margin-bottom: 10px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"], textarea, select {
    width: 100%;
    padding: 8px 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

input[type="file"] {
    margin-top: 5px;
}

input[type="submit"], input[type="reset"], input[type="button"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    padding: 8px 15px;
    border: none;
    border-radius: 3px;
}

input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    display: inline-block;
    margin-top: 5px;
}

a:hover {
    text-decoration: underline;
}

</style>
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
<div class="table">
    <div class="row formtitle">
        <h1>CẬP NHẬT KHÓA HỌC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatekh" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="iddm">Danh mục</label><br>
                <select name="iddm" id="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$iddm) $s="selected"; else $s="";
                            echo '<option value="'.$iddm.'" '.$s.'>'.$tendm.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="tenkhoahoc">Tên khóa học</label><br>
                <input type="text" name="tenkhoahoc" id="tenkhoahoc" value="<?= $tenkhoahoc?>">
            </div>
            <div class="row mb10">
                <label for="gia">Giá</label><br>
                <input type="text" name="gia" id="gia" value="<?= $gia?>">
            </div>
            <div class="row mb10">
                <label for="hinh">Hình</label><br>
                <input type="file" name="hinh" id="hinh">
                <?= $hinh?>
            </div>
            <div class="row mb10">
                <label for="mota">Mô tả</label><br>
                <textarea name="mota" id="mota" cols="30" rows="5"><?= $mota?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="idkhoahoc" value="<?= $idkhoahoc?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listkh">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <?php 
            if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
            ?>             
        </form>
    </div>
</div>
