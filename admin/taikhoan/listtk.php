

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
   
   <style>
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
</head>
<body>
            <div class="chitietcanhan">
                    <div class="payment-options">
                                <div class="nutthanhtoan">
                                        <div class="thongtindk1">
                                            <h3>Danh sách tài khoản</h3>
                                        </div>
                                        <div class="thongtindk2">
                                            <h3>Tài Khoản học viên </h3>
                                        </div>
                                        <div class="thongtindk3">
                                            <h3>Tài Khoản Giáo Viên</h3>
                                        </div>
                                        <div class="thongtindk4">
                                            <h3>Admin</h3>
                                        </div>
                                        
                                  </div>      

                               <div class="thongtindkl thongtindkl1">
                               <div class="boxdk">
                                    <div class="table">
                                            <table>
                                                    <tr class="daubai">
                                                        <th></th>
                                                        <th style="width:30px;">MÃ TÀI KHOẢN</th>
                                                        <th style="width:123px;">TÊN TÀI KHOẢN</th>
                                                        <th style="width:90px;">MẬT KHẨU</th>
                                                        <th style="width:100px;">EMAIL</th>
                                                        <th style="width:160px">ĐỊA CHỈ</th>
                                                        <th style="width:100px">SỐ ĐIỆN THOẠI</th>
                                                        <th style="width:140px">VAI TRÒ</th>
                                                        <th style="width:500px">THAO TÁC</th>
                                                    </tr>
                    
                        

                                        <?php
                                
                                                foreach ($listtaikhoan as $taikhoan) {
                                            extract($taikhoan);


                                            $tttaikhoan="index.php?act=thongtintk&iduser=".$iduser;                                          
                                            $roleName = ''; // Biến lưu tên vai trò
                                            if ($role == 0) {
                                                $roleName = 'Học viên';
                                            } elseif ($role == 1) {
                                                $roleName = 'Admin';
                                            } elseif ($role == 2) {
                                                $roleName = 'Giáo viên';
                                            } else {
                                                $roleName = 'Không xác định';
                                            }
                                            echo ' <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$iduser.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$roleName.'</td>
                                            <td><a href="'.$tttaikhoan.'">xem chi tiêt</a>
                                           
                                            </td>   
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                        <!-- <div class="" >
                                            <input type="button" value="Chọn tất cả">
                                            <input type="button" value="Bỏ chọn tất cả">
                                            <input type="button" value="Xóa các mục đã chọn">
                                      
                                        </div> -->
                                    </div>
                             </div>
                         </div>
                               <div class="thongtindkl thongtindkl2">
                               <div class="boxdk">
                                    <div class="table">
                                            <table>
                                                    <tr class="daubai">
                                                        <th></th>
                                                        <th style="width:30px;">MÃ TÀI KHOẢN</th>
                                                        <th style="width:123px;">TÊN TÀI KHOẢN</th>
                                                        <th style="width:90px;">MẬT KHẨU</th>
                                                        <th style="width:100px;">EMAIL</th>
                                                        <th style="width:160px">ĐỊA CHỈ</th>
                                                        <th style="width:100px">SỐ ĐIỆN THOẠI</th>
                                                        <th style="width:140px">VAI TRÒ</th>
                                                        <th style="width:500px">THAO TÁC</th>
                                                    </tr>
                    
                        

                                        <?php
                                
                                                foreach ($taikhoanhocsinh as $taikhoan) {
                                            extract($taikhoan);
                                            $tttaikhoan="index.php?act=thongtintk&iduser=".$iduser;                                          
                                            $roleName = ''; // Biến lưu tên vai trò
                                            if ($role == 0) {
                                                $roleName = 'Học viên';
                                            } elseif ($role == 1) {
                                                $roleName = 'Admin';
                                            } elseif ($role == 2) {
                                                $roleName = 'Giáo viên';
                                            } else {
                                                $roleName = 'Không xác định';
                                            }
                                            echo ' <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$iduser.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$roleName.'</td>
                                            <td><a href="'.$tttaikhoan.'">xem chi tiêt</a>
                                           
                                            </td>   
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                        <!-- <div class="" >
                                            <input type="button" value="Chọn tất cả">
                                            <input type="button" value="Bỏ chọn tất cả">
                                            <input type="button" value="Xóa các mục đã chọn">
                                      
                                        </div> -->
                                    </div>
                             </div>
                         </div>
                               <div class="thongtindkl thongtindkl3">
                               <div class="boxdk">
                                    <div class="table">
                                            <table>
                                                    <tr class="daubai">
                                                        <th></th>
                                                        <th style="width:30px;">MÃ TÀI KHOẢN</th>
                                                        <th style="width:123px;">TÊN TÀI KHOẢN</th>
                                                        <th style="width:90px;">MẬT KHẨU</th>
                                                        <th style="width:100px;">EMAIL</th>
                                                        <th style="width:160px">ĐỊA CHỈ</th>
                                                        <th style="width:100px">SỐ ĐIỆN THOẠI</th>
                                                        <th style="width:140px">VAI TRÒ</th>
                                                        <th style="width:500px">THAO TÁC</th>
                                                    </tr>
                    
                        

                                        <?php
                                
                                                foreach ($taikhoangiaovien as $taikhoan) {
                                            extract($taikhoan);


                                            $tttaikhoan="index.php?act=thongtingiaovien&iduser=".$iduser;                                          
                                            $roleName = ''; // Biến lưu tên vai trò
                                            if ($role == 0) {
                                                $roleName = 'Học viên';
                                            } elseif ($role == 1) {
                                                $roleName = 'Admin';
                                            } elseif ($role == 2) {
                                                $roleName = 'Giáo viên';
                                            } else {
                                                $roleName = 'Không xác định';
                                            }
                                            echo ' <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$iduser.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$roleName.'</td>
                                            <td><a href="'.$tttaikhoan.'">xem chi tiêt</a>
                                           
                                            </td>   
                                                </tr>';
                                        }
                                        ?> 
                                    </table>
                                        <!-- <div class="" >
                                            <input type="button" value="Chọn tất cả">
                                            <input type="button" value="Bỏ chọn tất cả">
                                            <input type="button" value="Xóa các mục đã chọn">
                                      
                                        </div> -->
                                    </div>
                             </div>
                         </div>
                               <div class="thongtindkl thongtindkl4">
                               <div class="boxdk">
                                    <div class="table">
                                            <table>
                                                    <tr class="daubai">
                                                        <th></th>
                                                        <th style="width:30px;">MÃ TÀI KHOẢN</th>
                                                        <th style="width:123px;">TÊN TÀI KHOẢN</th>
                                                        <th style="width:90px;">MẬT KHẨU</th>
                                                        <th style="width:100px;">EMAIL</th>
                                                        <th style="width:160px">ĐỊA CHỈ</th>
                                                        <th style="width:100px">SỐ ĐIỆN THOẠI</th>
                                                        <th style="width:140px">VAI TRÒ</th>
                                                        <th style="width:500px">THAO TÁC</th>
                                                    </tr>
                    
                        

                                        <?php
                                
                                                foreach ($taikhoanadmin as $taikhoan) {
                                            extract($taikhoan);


                                            $suataikhoan="index.php?act=updatetk&iduser=".$iduser;
                                            $xoataikhoan="index.php?act=deletetk&iduser=".$iduser;
                                            $roleName = ''; // Biến lưu tên vai trò
                                            if ($role == 0) {
                                                $roleName = 'Học viên';
                                            } elseif ($role == 1) {
                                                $roleName = 'Admin';
                                            } elseif ($role == 2) {
                                                $roleName = 'Giáo viên';
                                            } else {
                                                $roleName = 'Không xác định';
                                            }
                                            echo ' <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$iduser.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$roleName.'</td>
                                            <td><a href="'.$suataikhoan.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoataikhoan.'"><input type="button" value="Xóa"></a>
                                            </td>   
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                        <!-- <div class="" >
                                            <input type="button" value="Chọn tất cả">
                                            <input type="button" value="Bỏ chọn tất cả">
                                            <input type="button" value="Xóa các mục đã chọn">
                                      
                                        </div> -->
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
       
    </script>     
    </body>
</html>
