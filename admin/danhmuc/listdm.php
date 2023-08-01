
<div class="table">
            <h2>Quản Lý Danh mục</i></h2>
            <table>
                
                <tr class="daubai">
                   
                    <td style="width: 20px;"></td>
                    <td style="width: 120px;">Mã danh mục</td>
                    <td style="width: 250px;">Tên Danh Mục</td>
                    <td  style="width: 200px;">THAO TÁC</td>
                    
                    
                </tr>
                <tr>
                    <td colspan="7"><div class="ngan"></div></td>
                </tr>
                <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&iddm=".$iddm;
                                $xoadm="index.php?act=xoadm&iddm=".$iddm;
                                echo '<tr>
                                         <td><input type="checkbox"></td>
                                        <td>'.$iddm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                        
                                    
                                        
                                    </tr>';
                                    echo' <td colspan="7"><hr></td>';
                            }
                        ?>
                        </table>
                        <div class="row mb10" style="margin-left:7%">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
                </div>
                
                
            </div>
        </div>

