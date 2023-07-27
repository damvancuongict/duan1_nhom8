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
if(is_array($lop)){
    extract($lop);
}
?>
<div class="table">
    <div class="row formtitle">
        <h1>CẬP NHẬT LỚP HỌC</h1>
    </div>
            <div class="row formcontent">
                <form action="index.php?act=updatelop" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Tên khóa học<br>
                        <select name="idkhoahoc">
                            <option value="0" selected>Khóa học</option>
                            <?php
                            foreach ($listkh as $kh) {
                                extract($kh);
                                echo '<option value="'.$idkhoahoc.'">'.$tenkhoahoc.'</option>';
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
                        <select name="idusername">
                            <option value="0" selected>Giáo viên</option>
                            <?php
                            foreach ($listtk as $taikhoan) {
                                extract($taikhoan);
                                echo '<option value="'.$iduser.'">'.$username.'</option>';
                            }
                        ?>
                        </select>
                    </div>        
                    <div class="row mb10">
                        Ca học<br>
                        <input type="time" name="cahoc" value="<?= $cahoc?>" > 
                    </div>               
                    <div class="row mb10">
                        Ngày bắt đầu<br>
                       
                       <input type="date" name="ngaybatdau" value="<?= $ngaybatdau ?>">
                    </div>  
                    <div class="row mb10">
                        Ngày kết thúc<br>
                       <input type="date" name="ngayketthuc" value="<?= $ngayketthuc ?>"> 
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