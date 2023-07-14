<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH DANH MỤC</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdanhsach">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$iddm;
                                $xoadm="index.php?act=xoadm&id=".$iddm;
                                echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$iddm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
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