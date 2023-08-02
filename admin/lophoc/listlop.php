<div class="table">
            <h2>Quản Lý Lớp Học</h2>
            <table>
                <tr class="daubai">
                    <td style="width:15px;"></td>
                    <td style="width:120px;">Mã lớp học</td>
                    <td style="width:120px">Tên lớp học</td>
                    <td style="width:200px">Giáo viên</td>
                    <td style="width:120px">Ca học</td>
                    <td style="width:120px">Địa điểm học</td>
                    <td style="width:120px">Ngày bắt đầu</td>
                    <td style="width:300px">THAO TÁC</td>
                </tr>
                <tr>
                    <td colspan="9"><div class="ngan"></div></td>
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
                                        <td>'.$diadiemhoc.'</td>
                                        <td>'.$ngaybatdau.'</td>
                                        <td><a href="'.$sualop.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoalop.'"><input type="button" value="Xóa"></a></td>
                                        
                                    </tr>';
                                    echo' <td colspan="9"><hr></td>';
                            }
                        ?>
                    </table>
                    <div class="row mb10" style="margin-left:7%">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addlop"><input type="button" value="Nhập thêm"></a>
                    </div>
                </div>
                </div>