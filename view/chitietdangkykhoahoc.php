<style>
        
           
         
        .boxtrai {
       width: 100%;
       display: flex;
       justify-content: center;
       background-color: #eee;
       border-radius: 5px;
       padding: 20px;
   }
   .boxstitle {
       font-size: 24px;
       font-weight: bold;
       margin-bottom: 10px;
   }

  
   .boxstitle {
       font-size: 30px; 
       color: #007bff; 
   }
   .mr {
       margin-right: 20px;
   }

   .boxcontent {
       display: flex;
       flex-wrap: wrap;
       align-items: center;
   }

   .tong1 {
       flex-basis:60%;
       display: flex;
      
   }
   .spct {
    width: 700px;
   }
   .spct img{
    width: 100%;
   }

   .thumbnail-image {
       max-width: 100%;
       max-height: 400px;
       border-radius: 5px;
   }

   .chitiet {
       padding-left: 20px;
   }


   h3 {
       font-size: 18px;
       font-weight: bold;
   }

   .price {
     color: #ff0000;
   }

   
   p {
       margin-top: 10px;
       font-size: 16px;
       line-height: 1.6;
   }
   table {
       width: 100%;
       border-collapse: collapse;
       margin-bottom: 20px;
   }

   th, td {
       padding: 8px;
       text-align: left;
       border-bottom: 1px solid #ccc;
   }

   

   
   .register-button {
       background-color: #4CAF50;
       color: white;
       border: none;
       padding: 8px 16px;
       cursor: pointer;
       font-size: 14px;
   }

   .register-button:hover {
       background-color: #45a049;
   }

   
   td:first-child {
       padding-left: 20px;
   }

  
   tr:last-child td:last-child {
       padding-bottom: 20px;
   }

   
   .warning-message {
       color: red;
       font-size: 14px;
       font-weight: bold;
   }
  .chitietdangky{
   width: 100%;
  }
  .green {
   color: green;
 }

 .blue {
   color: blue;
 }
 .yellow {
   color:blue;
 }
 .red {
   color:red;
 }
 .sidebar-course-price {
        margin-top:0px;
        margin-left:20px;
        background-color: #ffffff; /* Màu trắng */
        height: 130px; /* Chiều cao là 3cm */
        width:300px; /* Chiều dài là 4cm */
        border: 1px solid  #ffffff; /* Border màu xám */
        padding: 10px; /* Khoảng cách giữa nội dung và border */
    }

    .sidebar-title {
        font-size: 18px; /* Kích thước font cho tiêu đề */
        margin-bottom: 10px; /* Khoảng cách dưới tiêu đề */
    }

    .sidebar-course-price span {
        font-size: 25px; /* Kích thước font cho giá tiền */
        color: #000000; /* Màu chữ là đen */
    }
</style> 
                       <div class="gridarea">
                         <div class="container">
                             <div class="">
                                 <div class="gridarea__img">
                                 <div class="chitietdangky">
                 <div class="tong">
                   <div class="boxtrai mr">
                     <?php 
                     extract($kh);
                     ?>
                     <div>
                       
                       <div class="row boxcontent">
                         <div class="tong1">
                           
                           <div class="row mb spct">
                             <img src="<?=$img_path.$anh?>" alt="" class="thumbnail-image">
                           </div>
                          
                            <div class="sidebar-course-price"> 
                              <h3 class="sidebar-title">Giá tiền</h3>
                                <span style="font-size: 25px"><?= $gia; ?> VND</span>
                             </div>                                                               
                         </div>
                         <div class="boxstitle"><?=$tenkhoahoc ?></div>
                         <p><?=$mota?></p>
                       </div>

                     </div>

                   </div>
                   <div class="boxstitle">Thông tin về khóa học</div>
                            <ul class="course-feature">
                                <li>Thời gian học : <?php echo $thoigiankhoahoc;?> Tuần </li>
                                <li>Kế hoạch học tập: </li>
                            </ul>
                       <div class="boxphai">

                       
                           <table >
                               <tr style="color:#fff;background-color:#0082c8; height:38px">
                                   <td >Tên Lớp</td>
                                   <td>Mã Lớp</td>
                                   <td>Ca học</td>
                                   <td>Ngày Khai Giảng</th>                               
                                   <th>Địa Điểm Học</th>
                                   <th>Giảng viên Dạy</th>
                                   <th>Slot</th>
                                   <th>Đăng ký</th>
                               </tr>
                               <?php
                
                               
                          $listlop = loadall_lop_user();

                                  foreach ($lopch as $row) {
                                    if (isset($row['idkhoahoc']) && $row['idkhoahoc'] == $idkhoahoc && strtotime($row['ngaybatdau']) > time() - (24 * 3600 * 7)) {
                                        extract($row);
                                
                                        echo '<tr>';
                                        echo '<td><span class="blue">' . $tenlop . '</span></td>';
                                        echo '<td>' . $idlop . '</td>';
                                        echo '<td>' . $cahoc . '</td>';
                                        echo '<td>' . $ngaybatdau . '</td>';
                                        echo '<td>' . $diadiemhoc . '</td>';
                                        echo '<td><span class="yellow">' . $username . '</span></td>';
                                
                                        if ($soluong == 0) {
                                            echo '<td style="color: red;">Học viên đã đầy</td>';
                                        } else {
                                            echo '<td><span class="green">' . $soluong . '</span></td>';
                                        }
                                
                                        echo '<td>';
                                        if ($soluong != 0) {
                                            if (isset($_SESSION['user']['iduser'])) {
                                                $count = checkIfUserRegistered($idlop, $_SESSION['user']['iduser']);
                                              
                                                if ($count == 0) {
                                                                                                                
                                                    echo '<button "type="button"><a href="index2.php?act=dangkylop&idlop='.$idlop.'">Đăng ký</a></button>';
                                               
                                                } else {
                                                    echo '<button class="btn btn-primary register-course" type="button">Đã đăng ký</button>';
                                                }
                                            } else {
                                                // Chưa đăng nhập, chuyển hướng đến trang đăng nhập
                                                echo '<button "type="button"><a  href="index2.php?act=dangnhap">Đăng ký</a></button>';
                                            }
                                        }
                                        echo '</td>';
                                
                                        echo '</tr>';
                                    }
                                } 
                                                                                                                                          
                               ?>
                           </table>
                           </div>                                                 
                       </div>
                    </div>
                  </div>                            
                   </div>
               </div>
           </div>
       </div>
         
                   