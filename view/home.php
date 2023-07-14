
            <h1>damva cuong</h1>
               
                <div class="row">
                    <?php
                    $i=0;
                
                    foreach ($spnew as  $sp) {
                        extract($sp);
                        $linksp="index2.php?act=khoahocct&idkh=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                            <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                            <p>Giá:'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                     <div class="row btnaddtocart" >
                                        <form action="index1.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="submit" name="addtocart"value="Thêm Vào Giỏ Hàng">
                                        </form>
                                     </div>
                                    
                            </div>';
                            $i+=1;
                    }
                    ?>
                   
            </div>
            
           
  