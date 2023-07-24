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


                                $suataikhoan="index.php?act=updatetk&iduser=".$iduser;
                                $xoataikhoan="index.php?act=deletetk&iduser=".$iduser;

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