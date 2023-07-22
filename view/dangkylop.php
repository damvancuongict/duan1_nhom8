
<style>
    .green {
    color: green;
  }

  .blue {
    color: blue;
  }
  .yellow {
    color:blue;
  }
  .red {
    color:red;
  }
  .boxphai{
    margin-top:140px;
  }
</style>
<body>
   

    
      <div class="boxphai">
                           <h1>Thông tin cá nhân của học viên</h1>
                          <div class="class-container">
                          <table>
                              <tr>
                                  <th>Tên Lớp</th>
                                  <th>Mã Lớp</th>
                                  <th>Ca học</th>
                                  <th>Ngày bắt đầu</th>
                                  <th>Ngày kết thúc</th>
                                  <th>Giá</th>
                                  <th>Giảng viên</th>
                                  <th>Số lượng</th>
                                  <th>Đăng ký</th>
                              </tr>
                              <?php
                           

                            // Kiểm tra tính tồn tại và dữ liệu của biến $_SESSION['addlop']
                            if (isset($_SESSION['addlop']) && !empty($_SESSION['addlop'])) {
                                foreach ($_SESSION['addlop'] as $row) {
                                    extract($row);
                                    echo '<tr>';
                                    echo '<td><span class="blue"> '.$row[0].'</td>';
                                    echo '<td>' . $row[1] . '</td>';
                                    echo '<td>' . $row[3] . '</td>';
                                    echo '<td>' . $row[4] . '</td>';
                                    echo '<td>' . $row[5] . '</td>';
                                    echo '<td><span class="red"> '.$row[6] .'</td>';
                                    echo '<td><span class="yellow"> '.$row[7].'';
                                    echo ' <td><span class="green"> '.$row[8].' </span>/<span class="blue">  '.$row[9].'</span></td>';
                                    echo '<td>';

                                    // ... Code xử lý thêm nút Đăng ký hoặc các thao tác khác ...

                                    echo '</tr>';
                                }
                            } else {
                                // Xử lý trường hợp khi biến $_SESSION['addlop'] không tồn tại hoặc không có dữ liệu
                                echo '<tr><td colspan="9">Không có thông tin lớp học đăng ký.</td></tr>';
                            }
                       
                            ?>
                          </table>

                          </div>
    

