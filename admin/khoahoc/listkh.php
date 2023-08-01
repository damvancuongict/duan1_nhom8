<div class="table">
            <h2>Quản Lý Khóa Học</h2>
            <table>
                <tr class="daubai">
                    <td style="width:15px;"></td>
                    <td style="width:100px;">Mã khóa học</td>
                    <td style="width:100px">Tên</td>
                    <td style="width:100px">Giá</td> 
                    <td style="width:100px">Ảnh</td>
                    <td style="width:500px">Mô Tả</td>
                    <td style="width:200px">THAO TÁC</td>
                </tr>
                <tr>
                    <td colspan="8"><div class="ngan"></div></td>
                </tr>

                
                <?php
                            foreach($listkh as $khoahoc){
                                extract($khoahoc);
                                $suakh="index.php?act=suakh&idkhoahoc=".$idkhoahoc;
                                $xoakh="index.php?act=xoakh&idkhoahoc=".$idkhoahoc;
                                $hinhpath = "../upload/".$anh;
                                if(is_file($hinhpath)){
                                    $hinh = "<img src='".$hinhpath."' height='80'>";
                                }
                                else{
                                    $hinh="no photo";
                                }
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$idkhoahoc.'</td>
                                        <td>'.$tenkhoahoc.'</td>
                                        <td>'.$gia.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$mota.'</td>
                                        <td><a href="'.$suakh.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoakh.'"><input type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                                    echo' <td colspan="8"><hr></td>';
                            }
                        ?>
                        
            </table>
                    <div class="row mb10" style="margin-left:7%">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
                </div>