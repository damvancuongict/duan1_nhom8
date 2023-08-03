<?php

// Hàm kiểm tra xem người dùng đã đăng ký lớp học chưa
function checkIfUserRegistered($idLop, $idUser) {
    // Truy vấn kiểm tra đăng ký
    $sql = "SELECT COUNT(*) AS count FROM dangky WHERE idlop = ? AND iduser = ?";   
    try {
        $count = pdo_query_value($sql, $idLop, $idUser);
        return $count;
    } catch (PDOException $e) {
        // Xử lý lỗi nếu cần thiết
        throw $e;
    }
}


    function insert_lop($tenlop,$iduser,$cahoc,$ngaybatdau,$diadiemhoc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,iduser,cahoc,ngaybatdau,diadiemhoc,idkhoahoc) values ('$tenlop','$iduser','$cahoc','$ngaybatdau','$diadiemhoc','$idkhoahoc')";
            pdo_execute($sql);
        }
    function delete_lop($idlop){
        $sql="DELETE FROM lop WHERE idlop=".$idlop;
        pdo_execute($sql);
    }
    function loadone_lop($idlop){
        $sql="SELECT * FROM lop WHERE idlop=".$idlop;
        $lophoc=pdo_query_one($sql);
        return $lophoc;
    }
    function update_lop($idlop,$tenlop,$cahoc,$ngaybatdau,$diadiemhoc,$iduser,$idkhoahoc){
            $sql="UPDATE lop SET idkhoahoc='".$idkhoahoc."', tenlop='".$tenlop."', cahoc='".$cahoc."', ngaybatdau='".$ngaybatdau."', diadiemhoc='".$diadiemhoc."', iduser='".$iduser."' WHERE idlop=".$idlop; 
            pdo_execute($sql);
        }
    // function loadone_lop($idlop){
    //     $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong, l.ngaybatdau, l.diadiemhoc, l.soluong, u.username
    //     FROM lop l
    //     JOIN user u ON l.iduser = u.iduser
    //     WHERE u.role = 2";
    //     $lop=pdo_query_one($sql);
    //     return $lop;
    // }
    
    function loadall_lop_user(){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.diadiemhoc,l.soluong, l.ngaybatdau, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $listlop=pdo_query($sql);
        $sql.=" ORDER BY idlop desc";
        return $listlop;
    } 

    function loadall_idlop($idlop){
        $sql = "SELECT lop.idlop, lop.tenlop, lop.idkhoahoc, lop.cahoc, lop.diadiemhoc, lop.iduser, lop.ngaybatdau, lop.soluong, khoahoc.tenkhoahoc, khoahoc.gia
        FROM lop
        INNER JOIN khoahoc ON lop.idkhoahoc = khoahoc.idkhoahoc
        WHERE lop.idlop = $idlop";
         $idlop=pdo_query_one($sql);
         return $idlop;
    } 
   
    function loadall_lop($kyw="",$idlop=0){
        $sql="SELECT * FROM lop WHERE 1";
        if($kyw!=""){
            $sql.=" AND tenlop LIKE '%".$kyw."%'";
        }
        if($idlop>0){
            $sql.=" AND idlop ='".$idlop."'";
        }
        $sql.=" ORDER BY idlop desc";
        $listlop=pdo_query($sql);
        return $listlop;
    }
        function insert_dangky($idlop,$trangthai,$iduser){
            $sql = "INSERT INTO dangky (idlop, trangthai, iduser) VALUES ('$idlop', '$trangthai', '$iduser')";
            pdo_execute($sql);
        }
?>