<style>
  /* Phần tử cha bao quanh biểu mẫu */
  .form-container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  /* Các nhãn cho từng trường */
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  /* Ô nhập liệu */
  input[type="text"] {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  /* Nút gửi biểu mẫu */
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /* Khi di chuột qua nút gửi */
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<div class="form-container">
  <form action="submit.php" method="POST">
    <label for="iddangky">ID Đăng ký:</label>
    <input type="text" id="iddangky" name="iddangky" required>

    <label for="idlop">ID Lớp:</label>
    <input type="text" id="idlop" name="idlop" required>

    <label for="iduser">ID User:</label>
    <input type="text" id="iduser" name="iduser" required>

    <label for="idkhoahoc">ID Khóa học:</label>
    <input type="text" id="idkhoahoc" name="idkhoahoc" required>

    <label for="cahoc">Ca học:</label>
    <input type="text" id="cahoc" name="cahoc" required>

    <label for="gia">Giá:</label>
    <input type="text" id="gia" name="gia" required>

    <input type="submit" value="Đăng ký">
  </form>
</div>
