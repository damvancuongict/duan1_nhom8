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
    width: 90%;
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
<div class="table">
    <div class="row formtitle">
    <h1>THÊM MỚI KHÓA HỌC</h1>
    </div>
 
        <div class="row formcontend" >
            <form action="index.php?act=addkh" method="post" enctype="multipart/form-data">
                <div class="row mb">
                    <label for="">Danh Mục</label><br>
                     <select name="iddm" id="">
                        <?php
                            foreach ($listdm as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$iddm.'">'.$tendm.'</option>';
                            }
                        ?>
                     </select>
                </div>
                <div class="row mb10">
                    <label for="">Tên khóa học</label><br>
                     <input type="text" name="tenkh" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Giá</label><br>
                     <input type="text" name="giakh" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Ảnh</label><br>
                     <input type="file" name="anh" id="" >
                </div>
                <!-- <div class="row mb10">
                    <label for="">Lượt xem</label><br>
                     <input type="text" name="luotxem" id="" >
                </div> -->
                <div class="row mb10">
                    <label for="">Mô Tả</label><br>
                     <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listkh"><input type="button" value="Danh Sách"></a>
                    
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>
    