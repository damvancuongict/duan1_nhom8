<style>
    .gridarea {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .class-container table {
        width: 100%;
        border-collapse: collapse;
    }

    .class-container th,
    .class-container td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .class-container th {
        background-color: #f2f2f2;
    }

    .class-container tr:hover {
        background-color: #f5f5f5;
    }

    .class-container tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Thêm CSS để căn giữa tiêu đề */
    .gridarea__img h2 {
        text-align: center;
        margin-top: 20px;
    }
</style>

<div class="gridarea">
    <div class="container">
        <div> 
            <div class="gridarea__wraper">
                <div class="gridarea__img">
                    <h2>Đã Đăng ký các lớp học</h2>
                    <div class="class-container">
                        <table>
                       
                            <tr> 
                                <th style="width:60px">ID Lớp</th>
                                <th style="width:60px">ID USER</th>
                                <th style="width:130px">Ca học</th>
                                <th style="width:130px">Ngày bắt đầu</th>
                                <th style="width:130px">Ngày kết thúc</th>
                                <th style="width:100px">Giá</th>                         
                                <th style="width:100px">Số lượng</th>
                                <th style="width:100px">Thành tiền</th>
                                <th style="width:100px">Thao tác</th>
                            </tr>
                            <?php
                             $tong = 0;
                                $i=0;
                             // Sắp xếp mảng $_SESSION['mylop'] theo cột "ID Lớp"
                            //  usort($_SESSION['mylop'], function($a, $b) {
                            //      return $a[0] <=> $b[0];
                            //  });
                             
                             foreach ($_SESSION['mylop'] as $row) {
                                 $thanhtien = $row[6] * $row[7];
                                 $tong += $thanhtien;
                                 $xoalop = '<a href="index2.php?act=xoadklop&idlop='.$i.'"><input type="button" value="xoa"></a>';
                                 echo '<tr>';
                                 echo '<td><span class="blue">' . $row[0] . '</td>';
                                 echo '<td><span class="blue">' . $row[1] . '</td>';
                                 echo '<td><span class="blue">' . $row[2] . '</td>';
                                 echo '<td><span class="blue">' . $row[3] . '</td>';
                                 echo '<td><span class="blue">' . $row[4] . '</td>';
                                 echo '<td><span class="blue">' . $row[5] . '</td>';
                                 echo '<td><span class="blue">' . $row[6] . '</td>';
                                 echo '<td><span class="blue">' . $thanhtien . '</td>';
                                 echo '<td>'.$xoalop.' </td>';
                                 echo '</tr>';
                                 $i+=1;
                             }
                             
                             echo '<tr>';
                             echo '<td colspan="7">Tổng đơn hàng</td>';
                             echo '<td><span class="blue">' . $tong . '</td>';
                             echo '</tr>';
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

