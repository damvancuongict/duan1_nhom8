
                

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

    
</style>
</head>
<body>
            <div class="chitietcanhan">
                    <div class="payment-options">
                                <div class="nutthanhtoan">
                                        <div class="thongtindk1">
                                            <h3>Danh sách Lớp</h3>
                                        </div>
                                        
                                            
                                            <div class="thongtindk5">
                                            <h3>Lớp Theo Ca học</h3>
                                          </div>
                                        <div class="thongtindk6">
                                            <h3>Lớp học Theo khóa học</h3>
                                        </div>
                                        
                                  </div>                                  
                               <div class="thongtindkl thongtindkl1">
                               <div class="boxdk">
                                    <div class="table">
                                            <table>
                                                    <tr class="daubai">
                                                     
                                                        <th style="width:60px;">MÃ LỚP HỌC</th>
                                                        <th style="width:123px;">TÊN LỚP HỌC</th>
                                                        <th style="width:123px;">GIANGR VIÊN DẠY</th>
                                                        <th style="width:170px;">CA HỌC</th>
                                                        <th style="width:150px;">đỊA ĐIỂM HỌC</th>
                                                        <th style="width:130px">NGÀY KHAI GIẢNG</th>                                                        
                                                        <th style="width:200px"><a href="index.php?act=addlop"><input type="button" value="Nhập thêm"></a></th> 
                                                    </tr>
                    
                        

                                        <?php
                                
                                        foreach($listlop as $lophoc){
                                            extract($lophoc);

                                            $sualop="index.php?act=sualop&idlop=".$idlop;
                                             $xoalop="index.php?act=xoalop&idlop=".$idlop;
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$sualop.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoalop.'"><input type="button" value="Xóa"></a></td>
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                       
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
