
<div class="gridarea">
            <div class="container">
                
                        <div class="gridarea__wraper">
                            <div class="gridarea__img ">
                <div class="tong2">

               
                 <div class="boxtrai mr">
           
                <?php 
                extract($kh);
                ?>
                
                    <div class="boxstitle"><?=$tenkhoahoc ?></div>
                    <div class="row boxcontent ">
                       
                        <?php
                             $anh=$img_path.$anh;
                             echo '<div class="row mb spct"> <img src="'.$anh.'" alt="" class="thumbnail-image"> </div>';

                            // echo '<div class="thu"> <img src="'.$hinh.'" alt="""> </div>';
                           echo '<h3>Mã khóa học:'.$idkhoahoc.'</h3>';
                           echo '<h3>Giá:'.$gia.'</h3>';
                           echo '<h3>Lượt xem:'.$luotxem.'</h3>';
                            echo '<h3>Mô Tả:</h3>'.$mota;
                            ?>
                    </div>
                </div>
             
             

            <div class="boxphai">
                <?php
                    include "dangkykhoahoc.php";
                ?>
            </div>
        </div>
               
                    </div>
            </div>
            </div>
            </div>
            