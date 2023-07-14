
            
               <div class="gridarea">
            <div class="container">
                <div >
                        <div class="gridarea__wraper">
                            <div class="gridarea__img">
                    <?php
                    $i=0;
                
                    foreach ($spnew as  $sp) {
                        extract($sp);
                        $linkkh="index2.php?act=khoahocct&idkhoahoc=".$idkhoahoc;
                        $anh=$img_path.$anh;
                        if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                            <div class="roww img"><a href="'.$linkkh.'"><img src="'.$anh.'" alt=""></a></div>
                            <p>Giá:'.$gia.'</p>
                            <a href="'.$linkkh.'"><strong>'.$tenkhoahoc.'</strong></a>
                                     <div class="row btnaddtocart" >
                                        <form action="index2.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$idkhoahoc.'">
                                        <input type="hidden" name="name" value="'.$tenkhoahoc.'">
                                        <input type="hidden" name="img" value="'.$anh.'">
                                        <input type="hidden" name="price" value="'.$gia.'">
                                        <input type="submit" name="addtocart"value="Đăng ký">
                                        </form>
                                     </div>
                                    
                            </div>';
                            $i+=1;
                    }
                    ?>
                   
                                 </div>
                     </div>
            </div>
            </div>
            </div>
            
           
  