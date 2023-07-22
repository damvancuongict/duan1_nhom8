<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH LỚP HỌC</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã lớp học</th>
                            <th>Tên lớp học</th>
                            <th>Giáo viên</th>
                            <th>Ca học</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>  
                            <th></th>
                        </tr>
                        <?php
                            foreach($listlop as $lophoc){
                                extract($lophoc);
                                $sualop="index.php?act=suakh&idlop=".$idlop;
                                $xoalop="index.php?act=xoakh&idlop=".$idlop;
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$idlop.'</td>
                                        <td>'.$tenlop.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$cahoc.'</td>
                                        <td>'.$ngaybatdau.'</td>
                                        <td>'.$ngayketthuc.'</td>
                                        <td><a href="'.$sualop.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoalop.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addlop"><input type="button" value="Nhập thêm"></a>
                </div>
                
            </div>
        </div>