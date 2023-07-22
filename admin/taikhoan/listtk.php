<div class="row header" ><h1>DANH SÁCH TÀI KHOẢN</h1></div>
        <div class="row formcontend" >
            <div class="row mb formtk">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN TÀI KHOẢN</th>
                        <th>MẬT KHẨU</th>   
                        <th>EMAIL</th>   
                        <th>ĐỊA CHỈ</th>   
                        <th>ĐIỆN THOẠI</th>   
                        <th>VAI TRÒ</th>   
                        <th></th>   
                    </tr>
                   
                        <?php
                        
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
<<<<<<< HEAD:admin/taikhoan/listtk.php
                                $suataikhoan="index.php?act=suataikhoan&iduser=".$iduser;
                                $xoataikhoan="index.php?act=xoataikhoan&iduser=".$iduser;
=======
                                $suataikhoan="index.php?act=updatetk&iduser=".$iduser;
                                $xoataikhoan="index.php?act=deletetk&iduser=".$iduser;
>>>>>>> 87babb0a028489752656b7e1d2d231773daa11d0:admin/taikhoan/list.php
                                echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$iduser.'</td>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suataikhoan.'"><input type="button" value="Sửa"></a>
                                <a href="'.$xoataikhoan.'"><input type="button" value="Xóa"></a>
                                </td>   
                                      </tr>';
                            }
                        ?> 
                       
                    
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất cả">
                <input type="button" value="Xóa các Mục Đã Chọn">
                <a href="#"><input type="button" value="Nhập Thêm"></a>
                
                
            </div>
        </div>