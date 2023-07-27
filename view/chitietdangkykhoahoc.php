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
       align-items: center;
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

   th {
       background-color: #ccc;
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

</style> 
                       <div class="gridarea">
                         <div class="container">
                             <div class="gridarea__wraper">
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
                           <div class="chitiet">
                             <div class="boxstitle"><?=$tenkhoahoc ?></div>
                             <h3>Mã khóa học:<?=$idkhoahoc?></h3>
                             <h3>Giá:<span class="price"><?=$gia?></span></h3>
                             <h3>Lượt xem:<?=$luotxem?></h3>
                             
                           </div>
                         </div>
                         <h3>Mô Tả:</h3>
                         <p><?=$mota?></p>
                       </div>
                     </div>
                   </div>
                       <div class="boxphai">
                         
                           <div class="class-container">
                           <table>
                               <tr>
                                   <th>Tên Lớp</th>
                                   <th>Mã Lớp</th>
                                   <th>Ca học</th>
                                   <th>Ngày bắt đầu</th>
                                   <th>Ngày kết thúc</th>
                                   <th>Giá</th>
                                   <th>Giảng viên</th>
                                   <th>Số lượng</th>
                                   <th>Đăng ký</th>
                               </tr>
                               <?php
                                                $listlop = loadall_lop_user();

                                  foreach ($lopch as $row) {
                                   if (isset($row['idkhoahoc']) && $row['idkhoahoc'] == $idkhoahoc) {
                                   extract($row);
                                   echo '<tr>';
                                   echo '<td><span class="blue"> '.$tenlop.'</td>';
                                   echo '<td>' . $idlop . '</td>';
                                   echo '<td>' . $cahoc . '</td>';
                                   echo '<td>' . $ngaybatdau . '</td>';
                                   echo '<td>' . $ngayketthuc . '</td>';
                                   echo '<td><span class="red"> '.$gia .'</td>';
                                   echo '<td><span class="yellow"> '.$username.'';
                                  //  var_dump($username);
                                  echo' <td><span class="green"> '.$soluong.' </span>/<span class="blue">  '.$soluongtoida.'</span></td>';
                                   echo '<td>';
                                   if ($soluong >= $soluongtoida) {
                                       echo '<p style="color: red;">Số lượng học viên đã đầy</p>';
                                   } else {
                                       echo '<button type="button" class="register-button" onclick="registerClass(' . $idlop . ')">Đăng ký</button>';
                                   }
                                   echo '</td>';
                                   echo '</tr>';
                               }
                               }
                               
                               
                               
                               
                               ?>
                           </table>

                           </div>
                           <input type="hidden" id="selected_classes" name="selected_classes" value="">
                           <button type="submit" style="display: none;" id="submit_button">Submit</button>
                         

                         <script>
                           function registerClass(classId) {
                             var selectedClasses = document.getElementById('selected_classes').value;
                             if (selectedClasses.length > 0) {
                               selectedClasses += ',';
                             }
                             selectedClasses += classId;
                             document.getElementById('selected_classes').value = selectedClasses;
                             document.getElementById('submit_button').click();
                           }
                         </script>
                       </div>
 </div>
</div>

       
                        
                   </div>
               </div>
           </div>
       </div>
         
                   