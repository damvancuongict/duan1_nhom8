<!-- 
<div class="row header"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
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
                                      echo' <td colspan="7"><hr></td>';
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
        </div> -->
        <div style="margin-left:-5%">
        <div class="table">
            <h2>Quản Lý Lớp Học</h2>
            <table>
                <tr class="daubai">
                    <td style="width:15px;"></td>
                    <td style="width:20px;">MÃ TÀI KHOẢN</td>
                    <td style="width:210px">TÊN TÀI KHOẢN</td>
                    <td style="width:90px">MẬT KHẨU</td>
                    <td style="width:100px">EMAIL</td>
                    <td style="width:100px">ĐỊA CHỈ</td>
                    <td>SĐT</td>
                    <td style="width:130px">VAI TRÒ</td>
                    <td>THAO TÁC</td>
                    
                </tr>
                <tr>
                    <td colspan="9"><div class="ngan"></div></td>
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
                                  echo' <td colspan="9"><hr></td>';
                        }
                    ?> 
                    </table>
                    <div class="row mb10" style="margin-left:7%">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <!-- <a href="index.php?act=addlop"><input type="button" value="Nhập thêm"></a> -->
                    </div>
                </div>
                </div></div>