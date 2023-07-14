<div class="row">
            <div class="row formtitle">
                <h2>DANH SÁCH NGƯỜI DÙNG</h2>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ USER</th>
                            <th>TÊN ĐĂNG NHẬP</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>ĐỊA CHỈ</th>
                            <th>ĐIỆN THOẠI</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listuser as $user){
                                extract($user);
                                $suatk="index.php?act=suatk&iduser=".$iduser;
                                $xoatk="index.php?act=xoatk&iduser=".$iduser;
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$tel.'</td>
                                        <td>'.$role.'</td>
                                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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