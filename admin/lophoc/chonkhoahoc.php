<div class="table">
            <h2>Chọn khóa học</h2>
            <table>
                <tr class="khoahoc">
                    <td style="width:200px">Tên khóa học</td>
                    <td style="width:130px">Hình</td>
                    <td style="width:100px">THAO TÁC</td>                    
                </tr>
                <tr>
                    <td colspan="7"><div class="ngan"></div></td>
                </tr>

                            <?php
                                foreach ($khoahoc as  $kh) {
                                    extract($kh);
                                    $suakh="index.php?act=suakh&idkhoahoc=".$idkhoahoc;
                                    $xoakh="index.php?act=xoakh&idkhoahoc=".$idkhoahoc;
                                    $hinhpath = "../upload/".$anh;
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height='80' width='300'>";
                                    }
                                    else{
                                        $hinh="no photo";
                                    }
                                        $linkkh="index.php?act=lop&idkhoahoc=".$idkhoahoc;
                                        echo '<tr>
                                                <td><a href="'.$linkkh.'">'.$tenkhoahoc.'</a></td>
                                                <td>'.$hinh.'</td>
                                                <td><a href="'.$suakh.'"><input type="button" value="Sửa"></a></td>
                                                <td><a href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
                                            </tr>';
                                            echo' <td colspan="7"><hr></td>';
                                    }
                                
                            ?>
                    </table>
                    <div class="row mb10" style="margin-left:7%">
                        
                        <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
                </div>