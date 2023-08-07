
<style>
    .row {
        display: flex;
        /* flex-direction: column; */
        /* align-items: center; */
        /* margin-bottom: 10px; */
        /* width: 400px; */
        /* background-color: #f2f2f2; */

    }

    
    .formtitle h1 {
        font-size: 24px;
        font-weight: bold;
        text-align:left;
        margin-bottom: 20px;
       
    }
    .formcontent {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        text-align:center;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
       margin-left:300px;
    }
    .formcontent2 {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
       
        text-align:center;
        border: 1px solid #ccc;
        width: 1100px;
      
    }

    .mb10 {
        margin-bottom: 10px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 250px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        padding: 8px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        background-color: #0056b3;
    }
    .suaxoa{
        display:flex;
    }
    .suaxoa a{
       margin:10px;
    }

    /* css bang tbale */
    
    th, td {
        border: 1px solid #dddddd;
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

    /* Thiết lập các nút trong bảng */
    .btn-tk {
        cursor: pointer;
        background-color: #e0e0e0;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.2s ease, color 0.2s ease, border 0.2s ease;
    }

    .btn-tk:hover {
        background-color: #d0d0d0;
    }

    .btn-tk a {
        text-decoration: none;
    }

    /* Thiết lập bảng các nút thêm và xóa */
    .table-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .table-buttons input {
        margin-right: 10px;
    }
    .thongtindkl {
            display: none; /* Hide all thongtindkl divs by default */
        }
        
        .thongtindkl1 {
            display: block; /* Show thongtindkl1 div by default */
        }
        .nutthanhtoan {
        display: flex; /* Hiển thị các phần tử con theo hàng ngang */
        justify-content: center; /* Canh giữa các phần tử con trong phần tử cha */
      
    }

    /* CSS cho từng phần tử con của phần nút thanh toán */
    .nutthanhtoan > div {
        cursor: pointer;
        background-color: #e0e0e0;
        border-radius: 5px;
        padding: 5px 10px;
        margin: 0 5px; /* Khoảng cách giữa các phần tử con */
        transition: background-color 0.2s ease, color 0.2s ease, border 0.2s ease;
    }

    /* CSS cho khi rê chuột vào từng phần tử con */
    .nutthanhtoan > div:hover {
        background-color: #d0d0d0;
    }
</style>
<?php
 
 extract( $thongtinlophoc);
?>
<div class="row">
    
    <div class="formcontent">
        <div class="formtitle">
        <h1>THÔNG TIN LỚP</h1>
     </div>
     <hr>
        <div class="row mb10">
            <label for=""> Tên lớp:</label>
            <br>
            <?=$tenlop?>
        </div>
        <div class="row mb10">
            <label for="">Khóa học</label>
            <br>
            <?=$tenkhoahoc?>
        </div>
        <div class="row mb10">
            <label for="">  Giảng Viên:</label>
            <br>
            <?=$username?>
        </div>
        <div class="row mb10">
            <label for=""> Ngày Khai Giảng:</label>
            <br>
            <?=$ngaybatdau?>
        </div>
        <div class="row mb10">
            <label for=""> Ca học :</label>
            <br>
            <?=$cahoc?>
        </div>
        <div class="row mb10">
            <label for=""> Trạng Thái :</label>
            <br>
            <?php
              $sualop="index.php?act=sualop&idlop=".$idlop;
              $xoalop="index.php?act=xoalop&idlop=".$idlop;
           $currentDate = date('Y-m-d'); // Lấy ngày hiện tại
           if (isset($lophoc['ngaybatdau'])) {
               if ($lophoc['ngaybatdau'] > $currentDate) {
                   echo "<p class='status-chua-hoat-dong'>Chưa Hoạt Động</p>";
               } elseif ($lophoc['ngaybatdau'] == $currentDate && $lophoc['ngayketthuc'] >= $currentDate) {
                   echo "<p class='status-hoat-dong'>Hoạt Động</p>";
               } elseif ($lophoc['ngayketthuc'] < $currentDate) {
                   echo "<p class='status-ket-thuc'>Kết Thúc</p>";
               } else {
                   echo "<p class='status-hoat-dong'>Hoạt Động</p>";
               }
           } else {
               echo "<p class='status-chua-hoat-dong'>Chưa Hoạt Động</p>";
           }    
            ?>
        </div>
        <div class="suaxoa">
           <?php echo ' <a href="'.$sualop.'"><input type="button" value="Sửa"></a>
            <a href="'.$xoalop.'"><input type="button" value="Xóa"></a>                                       
            <a href="index.php?act=listlop"><input type="button" value="Trở về"></a> ';?>
        </div>
    </div>
    <div class="formcontent2">
        <div class="formtitle">
        <h1>Danh Sách Học Viên</h1>
        </div>
        <hr>
        <div class="boxphai">
                    <table>
                        <tr class="daubai">
                            <td style="width:15px;">Mã Học Viên</td>
                             <td style="width:160px;">Tên Học Viên</td>
                             <td style="width:120px;">Email</td>
                            <td style="width:160px">Địa Chỉ</td>
                            <td style="width:120px">Số Điện Thoại</td>
                            <td style="width:120px">Trạng Thái</td>

                        </tr>
                        <?php
                         $loadnguoidung = loadnguoidungralop($idlop);
                        // var_dump($lopmot);
                        if (!empty($loadnguoidung)) {
                            foreach ($loadnguoidung as $lophoc) {
                                
                                echo "<tr>";
                                // Hiển thị thông tin của từng cột trong mỗi dòng
                                echo "<td>" . (isset($lophoc['iduser']) ? $lophoc['iduser'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['username']) ? $lophoc['username'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['email']) ? $lophoc['email'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['address']) ? $lophoc['address'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['tel']) ? $lophoc['tel'] : '') . "</td>";
                                
                                echo "<td>";
                                if (isset($lophoc['trangthai']) && $lophoc['trangthai'] == 1) {
                                    echo "<p>Đang Học</p>";
                                } else {
                                    echo "<p>Nghỉ Học</p>";
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
