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

</style>                      
       <div class="gridarea">
                         <div class="container">
                             <div class="gridarea__wraper">
                                 <div class="gridarea__img">
                                 <div class="chitietdangky">
                                <div class="boxtrai mr">
                                        <div class="row mb ">   
                                        <div class="boxstitle">TÀI KHOẢN</div>     
                                        <div class="a">
                                            <div class="boxcontent  dangky  body">
                                                
                        <form action="index2.php?act=dangky" method="post">
                                <h1 class="dangky-title">ĐĂNG KÝ</h1>
                                <div class="input-control">
                                    <label for="username">Tên Đăng Nhập</label>
                                    <input type="text" name="user" id="username" placeholder="">
                                    <span id="username-error" class="error"></span>
                                </div>
                                <div class="input-control">
                                    <label for="password">Mật Khẩu</label>
                                    <input type="password" name="pass" id="password">
                                    <span id="password-error" class="error"></span>
                                </div>
                                <div class="input-control">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="">
                                    <span id="email-error" class="error"></span>
                                </div>
                                <button type="submit" name="dangky" value="dangky" onclick=" validateFormdk()">Đăng Ký</button>
                                <button type="reset" name="nhaplai" value="">Nhập Lại</button>
                                <h2 id="thongbao" class="thongbao"></h2>
                          </form>
<script type="text/javascript">
  function validateFormdk(){
    let error = document.getElementsByClassName('error');
    let user = document.getElementById('username').value;
    let pass = document.getElementById('password').value;
    let email = document.getElementById('email').value;
    if(user==""){
			error[0].innerHTML = "Chua nhap ho ten";
		}else {
			error[0].innerHTML ="";
		}
    if(pass==null||pass==""){
			error[1].innerHTML ="Chua nhap mat khau";
		}else {
			error[1].innerHTML ="";
		}
		if(email==""){
			error[2].innerHTML = "Chua nhap email";
		}else if(!isemail(email)){
			error[2].innerHTML = "Email sai dinh dang";
		}else{
			error[2].innerHTML ="";
		}
    console.log(error);
  }
  function isEmail(email){
        let regexEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        return regexEmail.test(email);
    }
</script>
                          <h2>
                          <?php
                          if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;

                          }
                          ?>
                          </h2>  
                   </div>
                </div>                                          
                    
             </div>            
             </div>            
             </div>            
             </div>            
             </div>            