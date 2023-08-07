<?php
    if(is_array(loadone_taikhoan($_GET['iduser']))){
        // extract($mtaikhoan);
        extract(loadone_taikhoan($_GET['iduser']));
    } 
    // var_dump(loadone_taikhoan($_GET['iduser']));
    // loadone_taikhoan($_GET['iduser']);
   
?>
<style>
    .row {
        display: flex;
        /* flex-direction: column; */
        /* align-items: center; */
        margin-bottom: 10px;
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
        width: 900px;
      
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
    .status-chua-hoat-dong {
        color: green; /* Màu xanh lá cây cho trạng thái "Chưa Hoạt Động" */
    }

    .status-hoat-dong {
        color: dodgerblue; /* Màu xanh da trời cho trạng thái "Hoạt Động" */
    }

    .status-ket-thuc {
        color: red; /* Màu đỏ cho trạng thái "Kết Thúc" */
    }
</style>

<div class="row">
    
    <div class="formcontent">
        <div class="formtitle">
        <h1>THÔNG TIN TÀI KHOẢN</h1>
     </div>
     <hr>
        <div class="row mb10">
            <label for=""> Tên đăng nhập:</label>
            <br>
            <?=$username?>
        </div>
        <div class="row mb10">
            <label for=""> Email </label>
            <br>
            <?=$email?>
        </div>
        <div class="row mb10">
            <label for="">  Địa chỉ :</label>
            <br>
            <?=$address?>
        </div>
        <div class="row mb10">
            <label for=""> Điện thoại :</label>
            <br>
            <?=$tel?>
        </div>
        <div class="row mb10">
            <label for=""> Vai trò :</label>
            <br>
            <?php
            // Sử dụng câu lệnh điều kiện để thay thế giá trị vai trò bằng chuỗi tương ứng
            if ($role == 0) {
                echo "Học viên";
            } elseif ($role == 1) {
                echo "Admin";
            } elseif ($role == 2) {
                echo "Giáo viên";
            } else {
                echo "Vai trò không xác định";
            }
            $suataikhoan="index.php?act=updatetk&iduser=".$iduser;
            $xoataikhoan="index.php?act=deletetk&iduser=".$iduser;
            ?>
        </div>
        <div class="suaxoa">
           <?php echo ' <a href="'.$suataikhoan.'"><input type="button" value="Sửa"></a>
            <a href="'.$xoataikhoan.'"><input type="button" value="Xóa"></a>                                       
            <a href="index.php?act=taikhoan"><input type="button" value="Trở về"></a> ';?>
        </div>
    </div>
    <div class="formcontent2">
        <div class="formtitle">
        <h1>Danh Sách Dạy</h1>
        </div>
        <hr>
        <div class="boxphai">
                    <table>
                        <tr class="daubai">                           
                             <td style="width:300px;">Tên khóa học</td>
                             <td style="width:120px;">Tên lớp học</td>
                            <td style="width:160px">Ca học</td>
                            <td style="width:170px">Ngày Khai giảng</td>
                            <td style="width:200px">Địa điểm học</td>
                            <td style="width:80px">Số lượng </td>
                            <td style="width:180px">Trạng Thái</td>
                        </tr>
                        <?php
                         $lopmot = thongtindaycaclop($iduser);
                        if (!empty($lopmot)) {
                            foreach ($lopmot as $lophoc) {                               
                                echo "<tr>";
                                // Hiển thị thông tin của từng cột trong mỗi dòng                          
                                echo "<td>" . (isset($lophoc['tenkhoahoc']) ? $lophoc['tenkhoahoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['tenlop']) ? $lophoc['tenlop'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['cahoc']) ? $lophoc['cahoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['ngaybatdau']) ? $lophoc['ngaybatdau'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['diadiemhoc']) ? $lophoc['diadiemhoc'] : '') . "</td>";
                                echo "<td>" . (isset($lophoc['soluong']) ? $lophoc['soluong'] : '') . "</td>";
                                echo "<td>";
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
                           }    
                        }                    
                        ?>
                    </table>
                </div>    
    </div>
</div>
