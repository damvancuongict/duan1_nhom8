<?php
    if(is_array(loadone_taikhoan($_GET['iduser']))){
        // extract($mtaikhoan);
        extract(loadone_taikhoan($_GET['iduser']));
    } 
    // var_dump(loadone_taikhoan($_GET['iduser']));
    // loadone_taikhoan($_GET['iduser']);
   
?>
<style>
    /* Thiết lập font chữ và màu sắc chung */
body {
  font-family: Arial, sans-serif;
  color: #333;
}

/* Khung chứa */
.row {
  width:600px;
  margin-left:130px;
}

/* Tiêu đề form */
.formtitle {
  padding-top: 10%;
}

.formtitle h1 {
     margin-left:130px;
  font-size: 24px;
  font-weight: bold;
}

/* Nội dung form */
.formcontent {
  margin-top: 20px;
}

/* Dòng chứa mỗi input */
.mb10 {
  margin-bottom: 10px;
}

/* Nhãn chữ của input */
.mb10 label {
  display: block;
  font-size: 16px;
  font-weight: bold;
}

/* Ô input */
.mb10 input {
    margin-top:10px;
  width: 100%;
  padding: 5px;
  font-size: 14px;
  border: 1px solid #ccc;
}

/* Nút cập nhật và nhập lại */
.mb10 input[type="submit"],
.mb10 input[type="reset"] {
  padding: 8px 15px;
  font-size: 16px;
  font-weight: bold;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  cursor: pointer;
  margin-right: 10px;
}

/* Nút Danh sách */
.mb10 a input[type="button"] {
  padding: 8px 15px;
  font-size: 16px;
  font-weight: bold;
  background-color: #f44336;
  color: #fff;
  border: none;
  cursor: pointer;
}

/* Hiển thị thông báo */
.formcontent p {
  color: #f44336;
  font-size: 14px;
  font-weight: bold;
}


</style>
<body>
    

<div class="row" >
            <div class="row formtitle">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post" >
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
                         <!-- var_dump($iduser) -->
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
</body>
</html>