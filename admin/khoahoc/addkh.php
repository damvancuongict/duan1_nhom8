<div class="row header" ><h1>Thêm Mới Loại khóa học</h1></div>
        <div class="row formcontend" >
            <form action="index.php?act=addkh" method="post" enctype="multipart/form-data">
                <div class="row mb">
                    <label for="">Id Danh Mục</label><br>
                     <select name="iddm" id="">
                        <?php
<<<<<<< HEAD
                       foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
=======
                       foreach ($listdm as $loai) {
                        extract($loai);
>>>>>>> 2b25190e0fb4ef2ecb76d9da5133a0d4805cda95
                        echo '<option value="'.$iddm.'">'.$tendm.'</option>';
                    }
                        ?>
                     </select>
                </div>
                <div class="row mb10">
                    <label for="">Tên khóa học</label><br>
                     <input type="text" name="tenkh" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Giá</label><br>
                     <input type="text" name="giakh" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Ảnh</label><br>
                     <input type="file" name="anh" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Lượt xem</label><br>
                     <input type="text" name="luotxem" id="" >
                </div>
                <div class="row mb10">
                    <label for="">Mô Tả</label><br>
                     <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listkh"><input type="button" value="Danh Sách"></a>
                    
                </div>
                <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </form>

        </div>