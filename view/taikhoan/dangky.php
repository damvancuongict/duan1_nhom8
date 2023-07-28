      <style>
        /* Reset some default styling */
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

      </style>                       <div class="gridarea">
                         <div class="container">
                             <div class="gridarea__wraper">
                                 <div class="gridarea__img">
                                 <div class="chitietdangky">
                                <div class="boxtrai mr">
                                        <div class="row mb ">   
                                        <div class="boxstitle">TÀI KHOẢN</div>     
                                        <div class="a">
                                            <div class="boxcontent  dangky  body">
                                                
                        <form action="index2.php?act=dangky" method="post" onsubmit="return validateFormdk()">
                                <h1 class="dangky-title">ĐĂNG KÝ</h1>
                                <div class="input-control">
                                    <label for="username">Tên Đăng Nhập</label>
                                    <input type="text" name="user" id="username" placeholder="">
                                    <div id="username-error" class="error"></div>
                                </div>
                                <div class="input-control">
                                    <label for="password">Mật Khẩu</label>
                                    <input type="password" name="pass" id="password">
                                    <div id="password-error" class="error"></div>
                                </div>
                                <div class="input-control">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="">
                                    <div id="email-error" class="error"></div>
                                </div>
                                <button type="submit" name="dangky" value="dangky">Đăng Ký</button>
                                <button type="reset" name="nhaplai" value="">Nhập Lại</button>
                                <h2 id="thongbao" class="thongbao"></h2>
                            </form>
                       
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
             </div>            