<?php
function thongtinlopcuanguoidung(){
    if (isset($_SESSION['user']['iduser'])) {
        $iduser = $_SESSION['user']['iduser'];
        $sql = "SELECT dangky.*, lop.*, khoahoc.tenkhoahoc FROM dangky
                INNER JOIN lop ON dangky.idlop = lop.idlop
                INNER JOIN khoahoc ON lop.idkhoahoc = khoahoc.idkhoahoc
                WHERE dangky.iduser = '$iduser'";
        $lopnguoidung = pdo_query($sql);
        return $lopnguoidung;
    } else {
        return array(); // Trả về một mảng rỗng nếu người dùng chưa đăng nhập
    }
}
// ham này lấy về dss admin nhé
function thongtinlopcuanguoidungdangky() {
    $sql = "SELECT dangky.*, lop.*, khoahoc.tenkhoahoc, user.username
            FROM dangky
            INNER JOIN lop ON dangky.idlop = lop.idlop
            INNER JOIN khoahoc ON lop.idkhoahoc = khoahoc.idkhoahoc
            INNER JOIN user ON dangky.iduser = user.iduser";

    $lopnguoidung = pdo_query($sql);
    return $lopnguoidung;
}
// hàm này lấy diều kiện đã thanh toán 
function dathanhtoan() {
    $sql = "SELECT dangky.*, lop.*, khoahoc.tenkhoahoc, user.username
            FROM dangky
            INNER JOIN lop ON dangky.idlop = lop.idlop
            INNER JOIN khoahoc ON lop.idkhoahoc = khoahoc.idkhoahoc
            INNER JOIN user ON dangky.iduser = user.iduser
            WHERE dangky.trangthai = 1";

    $lopnguoidung = pdo_query($sql);
    return $lopnguoidung;
}
function chuathanhtoan() {
    $sql = "SELECT dangky.*, lop.*, khoahoc.tenkhoahoc, user.username
            FROM dangky
            INNER JOIN lop ON dangky.idlop = lop.idlop
            INNER JOIN khoahoc ON lop.idkhoahoc = khoahoc.idkhoahoc
            INNER JOIN user ON dangky.iduser = user.iduser
            WHERE dangky.trangthai = 0";

    $lopnguoidung = pdo_query($sql);
    return $lopnguoidung;
}
?>