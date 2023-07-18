
<style>
  .form-container {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  td {
    padding: 10px;
    border: 1px solid #ccc;
  }

  label {
    font-weight: bold;
  }

  input[type="checkbox"] {
    margin-right: 5px;
  }

  input[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
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
                                    <table>
                                        <tr>
                                            <td><label for="tenlop">Tên Lớp</label></td>
                                            <td><label for="cahoc">Ca học</label></td>
                                            <td><label for="ngaybatdau">Ngày bắt đầu</label></td>
                                            <td><label for="ngayketthuc">Ngày kết thúc</label></td>
                                            <td><label for="ngayketthuc">Mã khóa học</label></td>
                                            <td><label for="ngayketthuc">Giá</label></td>
                                            <td><label for="giangvien">Giảng viên</label></td>
                                        </tr>
                                        <?php
                                        foreach ($lopch as $row) {
                                            extract($row);
                                            echo '<tr>';
                                            echo '<td><input type="checkbox" name="lop[]" value="' . $idlop . '"> Lớp ' . $tenlop . '</td>';
                                            echo '<td>' . $cahoc . '</td>';
                                            echo '<td>' . $ngaybatdau . '</td>';
                                            echo '<td>' . $ngayketthuc . '</td>';
                                            echo '<td>' . 'Hoàng đình thắng' . '</td>';
                                            echo '</tr>';
                                        }
                                        ?>
                                    </table>
                                    <input type="submit" value="Đăng ký">
                                </form>
                            </div>
                        </div>

                    </div>
                     
                </div>
            </div>
        </div>
          
