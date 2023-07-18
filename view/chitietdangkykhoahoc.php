      <style>
           
         .chitietdangky {
          
          display: flex;
          justify-content: center;
           align-items: center;
            /* Thay đổi các thuộc tính của phần tử chitietdangky ở đây */
          }

          
          table {
            /* Thay đổi các thuộc tính của bảng ở đây */
            width: 100%;
          }

          td {
            /* Thay đổi các thuộc tính của ô trong bảng ở đây */
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
          }

          .lop-options,
          .cahoc-options {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
          }

          .lop-options div,
          .cahoc-options div {
            /* Thay đổi các thuộc tính của các tùy chọn lớp và ca học ở đây */
            padding: 5px;
            background-color: #f2f2f2;
          }

          input[type="submit"] {
            /* Thay đổi các thuộc tính của nút "Đăng ký" ở đây */
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
          }
          .thumbnail-image {
            max-width: 550px;
            /* Thay đổi các thuộc tính của phần tử thumbnail-image ở đây */
          }
          .tong1{
            display: flex;
          }
              .boxstitle {
                      font-size: 24px;
                      font-weight: bold;
                      color: #333;
                }
                .chitiet{
                
                  width: 100%;
                  margin-left:20px;
                }
      </style> 
    <div class="gridarea">
    <div class="container">
        <div>
            <div class="gridarea__wraper">
                <div class="gridarea__img">
                      <div class="chitietdangky">     
                        <div class="tong">
                          <div class="boxtrai mr">
                                <?php 
                                extract($kh);
                                ?>
                               <div>
                                <div class="boxstitle"><?=$tenkhoahoc ?></div>
                                <div class="row boxcontent">
                                <?php
                                    $anh=$img_path.$anh;
                                    echo ' <div class="tong1" ><div class="row mb spct"> <img src="'.$anh.'" alt="" class="thumbnail-image"> </div>';
                                    // echo '<div class="thu"> <img src="'.$hinh.'" alt="""> </div>';
                                    echo '<div class="chitiet"><h3>Mã khóa học:'.$idkhoahoc.'</h3>';
                                    echo '<h3>Giá:<span class="price">' . $gia . '</span></h3>';
                                    echo '<h3>Lượt xem:'.$luotxem.'</h3> </div> </div>';
                                    echo '<h3>Mô Tả:</h3>'.$mota;
                                ?>
                                </div>
                            </div>
                            <div class="boxphai">
                                  <div class="form-container">
                                  <table>
                                        <tr>
                                          <td><label for="tenlop">Tên Lớp</label></td>
                                          <td>
                                            <div class="lop-options">
                                              <?php
                                              foreach ($lopch as $row) {
                                                extract($row);
                                                echo '<div>Lớp ' . $tenlop . '</div>';
                                              }
                                              ?>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label for="cahoc">Ca học:</label></td>
                                          <td>
                                            <div class="cahoc-options">
                                              <?php
                                              foreach ($lopch as $row) {
                                                extract($row);
                                                echo '<div>' . $cahoc . '</div>';
                                              }
                                              ?>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label for="cahoc">Ngày bắt đâu:</label></td>
                                          <td>
                                            <div class="cahoc-options">
                                              <?php
                                              foreach ($lopch as $row) {
                                                extract($row);
                                                echo '<div>' . $ngaybatdau . '</div>';
                                              }
                                              ?>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><label for="cahoc">Ngày bắt kết thúc:</label></td>
                                          <td>
                                            <div class="cahoc-options">
                                              <?php
                                              foreach ($lopch as $row) {
                                                extract($row);
                                                echo '<div>' . $ngayketthuc . '</div>';
                                              }
                                              ?>
                                            </div>
                                          </td>
                                        </tr>
                                        
                                          
                                        </tr>
                                      </table>
                                      <button><a href="index2.php?act=dangkylop">Đăng ký</a></button> 
                                            
                                      
                                  </div>
                                </div>

                                </div>
        
                          </div>
                        </div>
                </div>
            </div>
        </div>
          
                    