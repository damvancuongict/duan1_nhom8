
<style>
       .container2 {
  width: 400px;
  height: 500px;
  margin: auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: center;
}

.gridarea {
 
  display: grid;
  place-items: center;
  height: 100vh;
}

.chitietdangky {
  text-align: center;
  margin-top:70px;
}

.chitietdangky h1 {
  font-size: 28px;
  margin-bottom: 20px;
}

.chitietdangky .success-icon {
  display: inline-block;
  font-size: 24px;
  color: #4CAF50;
  margin-right: 10px;
}

.chitietdangky button {
  background-color: #4CAF50;
  color:#FFFFFF;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
.chitietdangky button a{
  
  color:#FFFFFF;
  
}

.chitietdangky button:hover {
  background-color: #45a049;
}

          
</style>
<div class="gridarea">
  <div class="container2">
    <div class="">
      <div class="gridarea__img">
        <div class="chitietdangky">
          <i class="fas fa-check-circle success-icon"></i>
          <h1>Đã đăng ký thành công </h1>
          <button><a href="index2.php">Quay Về Trang Chủ</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

