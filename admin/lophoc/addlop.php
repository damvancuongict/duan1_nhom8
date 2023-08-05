<style>
    .table {
        width: 400px;
        margin-top: 25px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-right:500px;
        margin-top:20px;
    }

    /* .formtitle {
        text-align: center;
        margin-bottom: 20px;
    } */

    /* .formcontent {
        text-align: center;
    } */

    .row {
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    select {
        width: 90%;
        padding: 8px 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    input[type="file"] {
        margin-top: 5px;
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        padding: 8px 15px;
        border: none;
        border-radius: 3px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        background-color: #0056b3;
    }

    a {
        text-decoration: none;
        display: inline-block;
        margin-top: 5px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
<div class="table">
    <div class="row formtitle">
        <h1>THÊM MỚI LỚP HỌC</h1>
    </div>

    <div class="row formcontend">
        <form action="index.php?act=addlop" method="post" enctype="multipart/form-data">
            <div class="row mb">
                <label for="">Khóa học</label><br>
                <select name="idkhoahoc" id="">
                    <?php
                    foreach ($listkh as $khoahoc) {
                        extract($khoahoc);
                        echo '<option value="' . $idkhoahoc . '">' . $tenkhoahoc . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="row mb10">
                <label for="">Tên lớp</label><br>
                <input type="text" name="tenlop" id="">
            </div>
            <div class="row mb">
                <label for="">Giáo viên</label><br>
                <select name="iduser" id="iduser">
                    <?php
                    // Mảng lưu trữ các cặp iduser và username đã hiển thị
                    $giaovien = [];
                    foreach ($listtk as $taikhoan) {
                        extract($taikhoan);

                        // Tạo một cặp iduser và username để kiểm tra
                        $userPair = $iduser . '-' . $username;

                        // Kiểm tra xem cặp đã hiển thị trước đó chưa
                        if (!in_array($userPair, $giaovien)) {
                            // Nếu chưa hiển thị, thêm cặp vào mảng lưu trữ
                            $giaovien[] = $userPair;
                            echo '<option value="' . $iduser . '">' . $username . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Ca học</label><br>
                <input type="text" name="cahoc" id="">
            </div>
            <div class="row mb10">
                <label for="">Địa điểm học</label><br>
                <input type="text" name="diadiemhoc" id="diadiemhoc">
            </div>
            <div class="row mb10">
                <label for="">Ngày bắt đầu</label><br>
                <input type="date" name="ngaybatdau" id="">
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listlop"><input type="button" value="Danh Sách"></a>

            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>

    </div>
</div>
</div>