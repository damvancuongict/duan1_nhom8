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
                            <th>Lượt xem</th>
                            <th>Mô tả</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listkhoahoc as $khoahoc){
                                extract($khoahoc);
                                $suakh="index.php?act=suadm&iddm=".$iddm;
                                $xoakh="index.php?act=xoadm&iddm=".$iddm;
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$idkhoahoc.'</td>
                                        <td>'.$tenkhoahoc.'</td>
                                        <td>'.$giakh.'</td>
                                        <td>'.$anhkh.'</td>
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
                
            </div>
        </div>