<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI DANH MỤC</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã danh mục <br>
                        <input type="text" name="makhoahoc" disabled>
                    </div>
                    <div class="row mb10">
                        Tên danh mục <br>
                        <input type="text" name="tenkhoahoc" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                            echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>
