<style>
  /* ... (existing styles) ... */

  .class-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* This will create two columns with equal width */
    grid-gap: 20px; /* Adjust this to set the gap between class boxes */
    width: 1000px;
  }

  .class-box {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
  }

  .register-button {
    padding: 5px 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }
  .class-container {
      display: flex;
      flex-wrap: wrap;
    }
    .class-box {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      width: 300px;
    }
    .register-button {
      margin-top: 10px;
    }
</style>
<div class="gridarea">
  <div class="container">
    <div class="gridarea__wraper">
      <div class="gridarea__img">
        <div class="boxphai">
          <div class="form-container">
            <h2>Đăng ký khóa học</h2>
            <form action="process_registration.php" method="POST">
    <div class="class-container">
      <?php
      // $lopch là mảng dữ liệu chứa thông tin lớp học
      // Dữ liệu mẫu dưới đây, bạn cần điều chỉnh cho phù hợp với dữ liệu thực tế
      $lopch = [
        [
          'tenlop' => 'Lớp Toán Cơ Bản',
          'cahoc' => '08:00 - 10:00',
          'ngaybatdau' => '2023-07-25',
          'ngayketthuc' => '2023-09-15',
          'ma_khoahoc' => '35',
          'gia' => '120000',
          'giangvien' => 'Hoàng Đình Thắng',
          'idlop' => 1
        ],
        [
          'tenlop' => 'Lớp Lập Trình PHP',
          'cahoc' => '14:00 - 16:00',
          'ngaybatdau' => '2023-08-10',
          'ngayketthuc' => '2023-10-05',
          'ma_khoahoc' => '36',
          'gia' => '150000',
          'giangvien' => 'Nguyễn Thị Hương',
          'idlop' => 2
        ],
        // Thêm các dữ liệu lớp học khác nếu cần
      ];

      foreach ($lopch as $row) {
        extract($row);
        echo '<div class="class-box">';
        echo '<label for="tenlop">Tên Lớp</label>: ' . $tenlop . '<br>';
        echo '<label for="cahoc">Ca học</label>: ' . $cahoc . '<br>';
        echo '<label for="ngaybatdau">Ngày bắt đầu</label>: ' . $ngaybatdau . '<br>';
        echo '<label for="ngayketthuc">Ngày kết thúc</label>: ' . $ngayketthuc . '<br>';
        echo '<label for="ma_khoahoc">Mã khóa học</label>: ' . $ma_khoahoc . '<br>';
        echo '<label for="gia">Giá</label>: ' . $gia . '<br>';
        echo '<label for="giangvien">Giảng viên</label>: ' . $giangvien . '<br>';
        echo '<input type="checkbox" name="lop[]" value="' . $idlop . '"> Đăng ký<br>';
        echo '<button type="submit" class="register-button">Đăng ký</button>';
        echo '</div>';
      }
      ?>
    </div>
  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
