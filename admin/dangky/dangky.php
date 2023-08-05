


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .chitietcanhan {
            padding-top: 20px;
            margin-left: 230px;
            width: 1100px;
        }
        h2 {
            text-align: center;
        }

        /* Thiết lập bảng dữ liệu */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }

        /* Thiết lập màu nền cho các dòng chẵn */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Thiết lập màu nền cho dòng tiêu đề */
        .daubai {
            background-color: #dddddd;
        }
        
        .btn-da-thanh-toan {
            background-color: green;
            color: white;
        }
        
        .btn-chua-thanh-toan {
            background-color: red;
            color: white;
        }
        
        .nutthanhtoan {
            margin-left:30px;
            display: flex;
            justify-content:center;
            /* align-items: center; */
            /* background-color: #f0f0f0; */
            padding: 10px;
            border-radius: 10px;
            width: 1100px;
        }

        .nutthanhtoan h3 {
            cursor: pointer;
            margin: 5px 5px;
            padding: 5px 5px;
            background-color: #e0e0e0;
            border-radius: 5px;
            transition: background-color 0.2s ease, color 0.2s ease, border 0.2s ease;
        }

        .nutthanhtoan h3:hover {
            background-color: #d0d0d0;
        }

        .nutthanhtoan .active {
            color: white;
            background-color: #007bff;
            border: 2px solid #007bff;
        }

        .thongtindkl {
            display: none; /* Hide all thongtindkl divs by default */
        }
        
        .thongtindkl1 {
            display: block; /* Show thongtindkl1 div by default */
        }
    </style>
</head>
<body>
    <div class="chitietcanhan">
        <div class="payment-options">
                     <div class="nutthanhtoan">
                                <div class="thongtindk1">
                                    <h3>Danh sách đăng ký</h3>
                                </div>
                                <div class="thongtindk2">
                                    <h3>Đã Thanh Toán</h3>
                                </div>
                                <div class="thongtindk3">
                                    <h3>Chưa Thanh Toán</h3>
                                </div>
                                <div class="thongtindk4">
                                    <h3>Đăng Ký Nhiều Nhất</h3>
                                </div>
                                  </div>

                                <div class="thongtindkl thongtindkl1">
                                    <div class="boxdk">
                                     <table>
                                            <tr class="daubai">
                                                <th style="width:120px;">Tên Học Viên</th>
                                                <th style="width:23px;">Mã đăng ký</th>
                                                <th style="width:120px;">Tên khóa học</th>
                                                <th style="width:100px;">Tên lớp học</th>
                                                <th style="width:100px">Ca học</th>
                                                <th style="width:100px">Ngày Khai giảng</th>
                                                <th style="width:140px">Địa điểm học</th>
                                                <th style="width:50px">Số lượng</th>
                                                <th style="width:100px">Trạng Thái</th>
                                                <th style="width:40px"></th>
                                            </tr>
                                            <?php
                                            // $xoadangky="index.php?act=xoadangky&iddangky=".$iddangky;
                                            if (!empty( $dsdangkylop)) {
                                                foreach ($dsdangkylop as $lophoc) {
                                                    
                                                    echo "<tr>";
                                                    // Hiển thị thông tin của từng cột trong mỗi dòng
                                                    echo "<td>" . (isset($lophoc['username']) ? $lophoc['username'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['iddangky']) ? $lophoc['iddangky'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                                    echo "<td>";
                                                    if (isset($lophoc['trangthai']) && $lophoc['trangthai'] == 1) {
                                                        echo "<button class='btn-da-thanh-toan' data-id='" . $lophoc['iddangky'] . "' data-trangthai='1'>Đã thanh toán</button>";
                                                    } else {
                                                        echo "<button class='btn-chua-thanh-toan' data-id='" . $lophoc['iddangky'] . "' data-trangthai='0'>Chưa thanh toán</button>";
                                                    }
                                                    
                                                    echo "</td>";
                                                    // echo '<td><a href="'  '"><input type="button" value="">Sửa</a></td>';

                                                    echo "</tr>";
                                                }
                                               }
                                                ?>
                                               </table>
                                        </div>
                              </div>
                              <div class="thongtindkl thongtindkl2">
                            <div class="boxdk">
                                     <table>
                                            <tr class="daubai">
                                                <th style="width:120px;">Tên Học Viên</th>
                                                <th style="width:23px;">Mã đăng ký</th>
                                                <th style="width:120px;">Tên khóa học</th>
                                                <th style="width:100px;">Tên lớp học</th>
                                                <th style="width:100px">Ca học</th>
                                                <th style="width:100px">Ngày Khai giảng</th>
                                                <th style="width:140px">Địa điểm học</th>
                                                <th style="width:50px">Số lượng</th>
                                                <th style="width:100px">Trạng Thái</th>
                                                <th style="width:40px"></th>
                                            </tr>
                                            <?php
                                            // $xoadangky="index.php?act=xoadangky&iddangky=".$iddangky;
                                            if (!empty( $dathanhtoan)) { 
                                                foreach ($dathanhtoan as $lophoc) {
                                                    
                                                    echo "<tr>";
                                                    // Hiển thị thông tin của từng cột trong mỗi dòng
                                                    echo "<td>" . (isset($lophoc['username']) ? $lophoc['username'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['iddangky']) ? $lophoc['iddangky'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                                    echo "<td>";
                                                    if (isset($lophoc['trangthai']) && $lophoc['trangthai'] == 1) {
                                                        echo "<button class='btn-da-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Đã thanh toán</button>";
                                                    } else {
                                                        echo "<button class='btn-chua-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Chưa thanh toán</button>";
                                                    }
                                                    echo "</td>";
                                                    // echo '<td><a href="'  '"><input type="button" value=""></a></td>';

                                                    echo "</tr>";
                                                }
                                               }
                                                ?>
                                               </table>
                                        </div>
                                    </div>     


                            <div class="thongtindkl thongtindkl3">
                            <div class="boxdk">
                                            <table>
                                            <tr class="daubai">
                                                <th style="width:120px;">Tên Học Viên</th>
                                                <th style="width:23px;">Mã đăng ký</th>
                                                <th style="width:120px;">Tên khóa học</th>
                                                <th style="width:100px;">Tên lớp học</th>
                                                <th style="width:100px">Ca học</th>
                                                <th style="width:100px">Ngày Khai giảng</th>
                                                <th style="width:140px">Địa điểm học</th>
                                                <th style="width:50px">Số lượng</th>
                                                <th style="width:100px">Trạng Thái</th>
                                                <th style="width:40px"></th>
                                            </tr>
                                            <?php
                                            // $xoadangky="index.php?act=xoadangky&iddangky=".$iddangky;
                                            if (!empty($chuathanhtoan)) {
                                                foreach ($chuathanhtoan as $lophoc) {
                                                    
                                                    echo "<tr>";
                                                    // Hiển thị thông tin của từng cột trong mỗi dòng
                                                    echo "<td>" . (isset($lophoc['username']) ? $lophoc['username'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['iddangky']) ? $lophoc['iddangky'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                                    echo "<td>";
                                                    if (isset($lophoc['trangthai']) && $lophoc['trangthai'] == 1) {
                                                        echo "<button class='btn-da-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Đã thanh toán</button>";
                                                    } else {
                                                        echo "<button class='btn-chua-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Chưa thanh toán</button>";
                                                    }
                                                    echo "</td>";
                                                    // echo '<td><a href="'  '"><input type="button" value=""></a></td>';

                                                    echo "</tr>";
                                                }
                                               }
                                                ?>
                                               </table>
                                        </div>
                    </div>     


                 <div class="thongtindkl thongtindkl4">
                 <div class="boxdk">
                                     <table>
                                            <tr class="daubai">
                                                <th style="width:120px;">Tên Học Viên</th>
                                                <th style="width:23px;">Mã đăng ký</th>
                                                <th style="width:120px;">Tên khóa học</th>
                                                <th style="width:100px;">Tên lớp học</th>
                                                <th style="width:100px">Ca học</th>
                                                <th style="width:100px">Ngày Khai giảng</th>
                                                <th style="width:140px">Địa điểm học</th>
                                                <th style="width:50px">Số lượng</th>
                                                <th style="width:100px">Trạng Thái</th>
                                                    <th style="width:40px"></th>
                                            </tr>
                                            <?php
                                            // $xoadangky="index.php?act=xoadangky&iddangky=".$iddangky;
                                            if (!empty( $dsdangkylop)) {
                                                foreach ($dsdangkylop as $lophoc) {
                                                    
                                                    echo "<tr>";
                                                    // Hiển thị thông tin của từng cột trong mỗi dòng
                                                    echo "<td>" . (isset($lophoc['username']) ? $lophoc['username'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['iddangky']) ? $lophoc['iddangky'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                                    echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                                    echo "<td>";
                                                    if (isset($lophoc['trangthai']) && $lophoc['trangthai'] == 1) {
                                                        echo "<button class='btn-da-thanh-toan' data-id='"  . $lophoc['iddangky'] . " data-trangthai='1''>Đã thanh toán</button>";
                                                    } else {
                                                        echo "<button class='btn-chua-thanh-toan' data-id='" . $lophoc['iddangky'] . " data-trangthai='0''>Chưa thanh toán</button>";
                                                    }
                                                    echo "</td>";
                                                    // echo '<td><a href="'  '"><input type="button" value=""></a></td>';

                                                    echo "</tr>";
                                                }
                                               }
                                                ?>
                                               </table>
                                        </div>
             </div>

                    
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".nutthanhtoan > div").on("click", function () {
                // Hide all .thongtindklX divs first
                $(".payment-options > div:not(.nutthanhtoan)").hide();

                // Remove active class from all buttons and add to the clicked button
                $(".nutthanhtoan h3").removeClass("active");
                $(this).find("h3").addClass("active");

                // Show the corresponding .thongtindklX div based on the clicked element
                var targetId = $(this).index() + 1;
                $(".thongtindkl" + targetId).fadeIn();
            });
        });
        $(document).ready(function() {
    // Lắng nghe sự kiện click vào nút "Đã thanh toán"
    $(document).on('click', '.btn-da-thanh-toan', function() {
        var iddangky = $(this).data('id');
        var trangthai = $(this).data('trangthai');

        // Gửi yêu cầu cập nhật trạng thái lên máy chủ bằng Ajax
        $.ajax({
            url: 'dangky/thaydoitrangthai.php', // Đường dẫn tới file PHP xử lý cập nhật trạng thái
            type: 'POST',
            data: { iddangky: iddangky, trangthai: trangthai },
            success: function(response) {
                // Xử lý kết quả trả về từ máy chủ (nếu cần)
                // Ví dụ: thông báo thành công hoặc cập nhật giao diện trạng thái mới
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
            }
        });
    });

    // Lắng nghe sự kiện click vào nút "Chưa thanh toán" (tương tự như trên)
    $(document).on('click', '.btn-chua-thanh-toan', function() {
        var iddangky = $(this).data('id');
        var trangthai = $(this).data('trangthai');

        $.ajax({
            url: 'dangky/thaydoitrangthai.php',
            type: 'POST',
            data: { iddangky: iddangky, trangthai: trangthai },
            success: function(response) {
                // Xử lý kết quả trả về từ máy chủ (nếu cần)
                // Ví dụ: thông báo thành công hoặc cập nhật giao diện trạng thái mới
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
            }
        });
    });
});
       
    </script>
</body>
</html>

