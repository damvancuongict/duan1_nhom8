<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .chitietcanhan {
            padding-top: 30px;
            margin-left: 180px;
            width: 1150px;
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
    </style>
</head>
<body>
    <div class="chitietcanhan">
        <div class="boxphai">
            <h2>Thông tin đăng ký</h2>
            <table>
                <tr class="daubai">
                    <th style="width:130px;">Tên Học Viên</th>
                    <th style="width:23px;">Mã đăng ký</th>
                    <th style="width:120px;">Tên khóa học</th>
                    <th style="width:100px;">Tên lớp học</th>
                    <th style="width:100px">Ca học</th>
                    <th style="width:100px">Ngày Khai giảng</th>
                    <th style="width:140px">Địa điểm học</th>
                    <th style="width:50px">Số lượng</th>
                    <th style="width:120px">Trạng Thái</th>
                    <th style="width:40px"></th>
                </tr>
                <?php
                
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
                            echo "<button class='btn-da-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Đã thanh toán</button>";
                        } else {
                            echo "<button class='btn-chua-thanh-toan' data-id='" . $lophoc['iddangky'] . "'>Chưa thanh toán</button>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                    ?>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                // Xử lý khi nhấp vào nút đã thanh toán
                $(document).on('click', '.btn-da-thanh-toan', function () {
                    var id = $(this).data('id');
                    console.log('Click vào nút đã thanh toán với id: ' + id);
                    $.ajax({
                        url: 'capnhat_trangthai.php',
                        method: 'POST',
                        data: {id: id, trangthai: 0},
                        success: function (response) {
                            console.log('Phản hồi từ máy chủ: ' + response);
                            if (response === 'success') {
                                $('.btn-da-thanh-toan[data-id="' + id + '"]').removeClass('btn-da-thanh-toan').addClass('btn-chua-thanh-toan').text('Chưa thanh toán');
                            }
                        }
                    });
                });
    
                // Xử lý khi nhấp vào nút chưa thanh toán
                $(document).on('click', '.btn-chua-thanh-toan', function () {
                    var id = $(this).data('id');
                    // Gửi yêu cầu AJAX để cập nhật trạng thái thành 1
                    $.ajax({
                        url: 'capnhat_trangthai.php',
                        method: 'POST',
                        data: {id: id, trangthai: 1},
                        success: function (response) {
                            // Cập nhật lại giao diện nút button
                            if (response === 'success') {
                                $('.btn-chua-thanh-toan[data-id="' + id + '"]').removeClass('btn-chua-thanh-toan').addClass('btn-da-thanh-toan').text('Đã thanh toán');
                            }
                        }
                    });
                });
            });
        </script>
    </body>
    </html>