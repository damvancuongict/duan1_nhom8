
                

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
   
   <
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
        /* background-color: #e0e0e0; */
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
    .boxdk h2{
        margin-left: 500px;
    }
  
</style>
</head>
<body>
            <div class="chitietcanhan">
                    <div class="payment-options">
                                <div class="nutthanhtoan">
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 1</h1>
                                        </div>
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 2</h1>
                                        </div>                                                                                                                       
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 3</h1>
                                        </div>                                                                                                                       
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 4</h1>
                                        </div>                                                                                                                       
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 5</h1>
                                        </div>                                                                                                                       
                                        <div class="thongtindk1">
                                            <h1 class="thongtindk1">Ca 6</h1>
                                        </div>                                                                                                                       
                                        <div class="thongtindk1"><a href="index.php?act=listlop">Trở về</a>
                                            
                                        </div>                                                                                                                       
                                                                                                                                                          
                                  </div>                
                                   <!-- <a href="index.php?act=cahoc">Lớp Theo Ca học</a> -->                 
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
                                
                                        foreach($cahoc1 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                      </div>
                                </div>
                            </div>
                            <!-- ca 2 -->
                            <div class="thongtindkl thongtindkl2">
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
                                
                                        foreach($cahoc2 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                                      </div>
                            </div>
                            </div>
                            <div class="thongtindkl thongtindkl3">
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
                                
                                        foreach($cahoc3 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                            </div>
                            </div>
                            </div>
                            <div class="thongtindkl thongtindkl4">
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
                                
                                        foreach($cahoc4 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                            </div>
                            </div>
                            </div>
                            <div class="thongtindkl thongtindkl5">
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
                                
                                        foreach($cahoc5 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
                                        }
                                        ?> 
                                    </table>
                            </div>
                            </div>
                            </div>
                            <div class="thongtindkl thongtindkl6">
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
                                
                                        foreach($cahoc6 as $lophoc){
                                            extract($lophoc);

                                            $ttlophoc="index.php?act=thongtinlophoc&idlop=".$idlop;         
                                            
                                            echo ' <tr>
                                            
                                            <td>'.$idlop.'</td>               
                                            <td>'.$tenlop.'</td>
                                            <td>'.$username.'</td>
                                            <td>'.$cahoc.'</td>
                                            <td>'.$diadiemhoc.'</td>
                                            <td>'.$ngaybatdau.'</td>
                                            <td><a href="'.$ttlophoc.'">xem chi tiêt</a>                                         
                                            </td> 
                                                </tr>';
                                                
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
        // Lấy index của nút đang được click
        var targetId = $(this).index() + 1;
        
        // Ẩn tất cả các phần thông tin của các ca học
        $(".thongtindkl").hide();

        // Hiển thị phần thông tin của ca học tương ứng
        $(".thongtindkl" + targetId).fadeIn();

        // Xóa class 'active' khỏi tất cả các nút
        $(".nutthanhtoan > div").removeClass("active");

        // Thêm class 'active' vào nút được click
        $(this).addClass("active");
    });
});

    
    </script>     
    </body>
</html>
