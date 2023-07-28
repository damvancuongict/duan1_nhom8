<div class="table">
            <h2>Quản Lý Lớp Học</h2>
            <table>
                <tr class="daubai">
                    <td style="width:15px;"></td>
                    <td style="width:20px;">Mã lớp học</td>
                    <td style="width:200px">Tên lớp học</td>
                    <td style="width:130px">Giáo viên</td>
                    <td style="width:130px">Ca học</td>
                    <td style="width:150px">Ngày bắt đầu</td>
                    <td style="width:150px">Ngày kết thúc</td>
                    <td style="width:200px">Sửa</td>
                    <td>Xóa</td>
                    
                </tr>
                <tr>
                    <td colspan="7"><div class="ngan"></div></td>
                </tr>

                        <?php
                            foreach($listlop as $lophoc){
                                extract($lophoc);
                                $sualop="index.php?act=sualop&idlop=".$idlop;
                                $xoalop="index.php?act=xoalop&idlop=".$idlop;
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$idlop.'</td>               
                                        <td>'.$tenlop.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$cahoc.'</td>
                                        <td>'.$ngaybatdau.'</td>
                                        <td>'.$ngayketthuc.'</td>
                                        <td><a href="'.$sualop.'"><input type="button" value="Sửa"></a></td>
                                        <td><a href="'.$xoalop.'"><input type="button" value="Xóa"></a></td>
                                        
                                    </tr>';
                                    echo' <td colspan="7"><hr></td>';
                            }
                        ?>
                    </table>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addlop"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
                </div>