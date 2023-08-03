<style>
    .gridarea {
        display: grid;
        place-items: center;
        height: 100vh;
    }

    .container2 {
        max-width: 1200px;
        height: 500px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .gridarea__img {
        display: flex;
    }

    .chitietcanhan {
        flex: 1;
    }

    .boxphai h2 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th,
    table td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .daubai {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>







<div class="gridarea">
    <div class="container2">
        <div class="gridarea__img">
            <div class="chitietcanhan">
                <div class="boxphai">
                    <h2>Đã đăng ký khóa học</h2>
                    <table>
                        <tr class="daubai">
                            <td style="width:15px;">Mã đăng ký</td>
                             <td style="width:120px;">Tên khóa học</td>
                             <td style="width:120px;">Tên lớp học</td>
                            <td style="width:120px">Ca học</td>
                            <td style="width:120px">Ngày Khai giảng</td>
                            <td style="width:120px">Địa điểm học</td>
                            <td style="width:120px">Số lượng</td>
                            <td style="width:120px">Trạng Thái</td>
                        </tr>
                        <?php
                        $lopnguoidung = thongtinlopcuanguoidung();
                        if (!empty($lopnguoidung)) {
                            foreach ($lopnguoidung as $lophoc) {
                                echo "<tr>";
                                echo "<td>" . (isset($lophoc['iddangky']) ? $lophoc['iddangky'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                if (isset($lophoc['trangthai'])) {
                                    echo "<td>";
                                    if ($lophoc['trangthai'] == 1) {
                                        echo "<p style=\"color: blue;\">Đã thanh toán</p>";
                                    } elseif ($lophoc['trangthai'] == 0) {
                                        echo "<p style=\"color: red;\">Chưa thanh toán</p>";
                                    }
                                    echo "</td>";
                                } else {
                                    echo "<td></td>";
                                }
                        
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Không có dữ liệu lớp học</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
