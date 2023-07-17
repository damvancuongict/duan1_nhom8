      <style>
            .chitietdangky {
            width: 100%;
            background-color: #f5f5f5;
            margin-top:100px;
            padding: 20px;
            }

            .tong {
            display: flex;
            justify-content: space-between;
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            margin-top:0;
            }

            .boxtrai {
            flex-basis: 65%;
            margin-top:10px;
            margin-left:60px;
        
           
            }

            .boxphai {
                flex-basis: 35%;
                margin-top: 1px;
                display: flex;
                align-items: center;
                }
                .boxstitle {
                font-size: 24px;
                font-weight: bold;
                color: blue;
                margin-bottom: 10px;
            }

            .price {
                color: red;
            }
.thumbnail-image {
    width: 300px; //
    height: auto;
    margin-bottom: 10px;
}

.form-container {
  width: 100%;
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.form-container label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-container select,
.form-container input[type="text"] {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-bottom: 10px;
}

.form-container input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-container input[type="submit"]:hover {
  background-color: #45a049;
}

      </style> 
                <div class="chitietdangky">

      
                        <div class="tong">
                          <div class="boxtrai mr">
                                <?php 
                                extract($kh);
                                ?>
                                <div class="boxstitle"><?=$tenkhoahoc ?></div>
                                <div class="row boxcontent">
                                <?php
                                    $anh=$img_path.$anh;
                                    echo '<div class="row mb spct"> <img src="'.$anh.'" alt="" class="thumbnail-image"> </div>';
                                    // echo '<div class="thu"> <img src="'.$hinh.'" alt="""> </div>';
                                    echo '<h3>Mã khóa học:'.$idkhoahoc.'</h3>';
                                    echo '<h3>Giá:<span class="price">' . $gia . '</span></h3>';
                                    echo '<h3>Lượt xem:'.$luotxem.'</h3>';
                                    echo '<h3>Mô Tả:</h3>'.$mota;
                                ?>
                                </div>
                            </div>
                            <div class="boxphai">
                                        <div class="form-container">
                                        <form action="submit.php" method="POST">
                                            <label for="iduser">Email</label>
                                            <input type="text" id="iduser" name="iduser" required>
                                            <label for="tenlop">Tên Lớp</label>
                                            <select id="idlop" name="idlop" required>
                                                <option value="">-- Chọn lớp --</option>
                                                <option value="lop1">Lớp 1</option>
                                                <option value="lop2">Lớp 2</option>
                                                <option value="lop3">Lớp 3</option>
                                                <!-- Thêm các lớp khác vào đây -->
                                                </select>   
                                            
                                            <label for="cahoc">Ca học:</label>
                                                <select id="cahoc" name="cahoc" required>
                                                <option value="">-- Chọn ca học --</option>
                                                <?php
                                                    // Lấy dữ liệu ca học từ ngôn ngữ PHP (ví dụ: mảng $listCaHoc chứa danh sách ca học)
                                                    $listCaHoc = array("Ca 1", "Ca 2", "Ca 3", "Ca 4");

                                                    // Duyệt qua danh sách và tạo các tùy chọn
                                                    foreach ($listCaHoc as $cahoc) {
                                                    // Kiểm tra nếu giá trị $cahoc trùng với giá trị đã được chọn trước đó
                                                    $selected = ($cahoc == $selectedCaHoc) ? 'selected' : '';

                                                    // In ra các tùy chọn
                                                    echo '<option value="' . $cahoc . '" ' . $selected . '>' . $cahoc . '</option>';
                                                    }
                                                ?>
                                                </select>
                                            <label for="gia">Giá:</label>
                                            <input type="text" id="gia" name="gia" required>
                                            <input type="submit" value="Đăng ký">
                                        </form>
                                        </div>
                                    </div>

                                </div>
        
                 </div>