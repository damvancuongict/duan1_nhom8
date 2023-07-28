<?php
// session_start();
?>
<style>
       body, {
  margin:0;
  padding: 0;
}

/* Center the entire form on the page */
.chitietdangky {
    margin-left:350px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Set the height to occupy the full viewport */
}

/* Style the form container */
.boxtrai {
  width: 400px; /* Set the width of the form container as per your design */
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #f9f9f9;
  border-radius: 5px;
}

/* Style the form elements */
.input-control {
  margin-bottom: 15px; /* Add some spacing between form elements */
}

.input-control label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.input-control input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style the form buttons */
button {
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: #007bff;
  color: #fff;
}

button[type="reset"] {
  margin-left: 10px; /* Add some spacing between buttons */
}

      </style>        
      
      <div class="gridarea">
                         <div class="container">
                             <div class="gridarea__wraper">
                                 <div class="gridarea__img">
                                 <div class="chitietdangky">
                                <div class="boxtrai mr">
                                        <div class="row mb ">   
                                        <div class="boxstitle">ĐĂNG NHẬP</div>     
                                        <div class="a">
                                            <div class="boxcontent  dangky  body">
                                          <form action="index2.php?act=dangnhap" method="post" onsubmit="return validateForm()">
                                                <div class="row mb10">
                                                <label for="username">Tên đăng nhập</label><br>
                                                <input type="text" id="username" name="user">
                                                <span id="username-error" class="error-message"></span>
                                                </div>
                                                <div class="row bt10">
                                                <label for="password">Mật khẩu</label><br>
                                                <input type="password" id="password" name="pass">
                                                <span id="password-error" class="error-message"></span>
                                                </div>
                                                <div class="row bt10">
                                                <input type="checkbox" name="checkbox" id="remember"> Ghi nhớ tài khoản ?
                                                </div>
                                                <input type="submit" value="Đăng Nhập" name="dangnhap">
                                            </form>

                                    <li><a href="index2.php?act=quenmatkhau">Quên mật khẩu</a></li>
                                    <li><a href="index2.php?act=dangky">Đăng ký thành viên</a></li>
                                    <?php
                          if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;

                          }
                          ?></h2>  
                   </div>
                </div>                           
             </div>            
             </div>            
             </div>            
             </div>     