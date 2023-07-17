<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH KHÓA HỌC</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã khóa học</th>
                            <th>Tên khóa học</th>
                            <th>Giá</th>
                            <th>Ảnh</th>
                            <!-- <th>Lượt xem</th> -->
                            <th>Mô tả</th>  
                            <th></th>
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
                                        <a href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
                </div>
                
            </div>
        </div>