<div class="gridarea">
    <div class="container">
        <div>
            <div class="gridarea__wraper">
                <div class="gridarea__img">
                    <h1>dam van cuong</h1>
                    <?php
                    $i = 0;   
                    foreach ($dskh as $kh) {    
                        // var_dump($dskh);
                       extract($kh); 
                        $linkkh = "index2.php?act=dangkykhoahoc&idkhoahoc=" . $idkhoahoc;
                        $anh = $img_path . $anh;
                        if (($i == 2) || ($i == 5) || ($i == 11)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }                      
                        echo '
                        
                        <div class="boxsp ' . $mr . '">
                            <div class="roww img"><a href="' . $linkkh . '"><img src="' . $anh . '" alt=""></a></div>
                            <p>Giá: ' . $gia . '</p>
                            <a href="' . $linkkh . '"><strong>' . $tenkhoahoc . '</strong></a>
                            <div class="row btnaddtocart">
                                <form action="index2.php?act=dangkykhoahoc&idkhoahoc" method="post">
                                    <input type="hidden" name="id" value="' . $idkhoahoc . '">
                                    <input type="hidden" name="name" value="' . $tenkhoahoc . '">
                                    <input type="hidden" name="img" value="' . $anh . '">
                                    <input type="hidden" name="price" value="' . $gia . '">
                                    <input formaction="' . $linkkh . '" type="submit" name="addtocart" value="Đăng ký">
                                </form>
                            </div>
                        </div>';
                        $i += 1;
                       
                    }
             
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
