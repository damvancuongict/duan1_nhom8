<?php

// function return_oder($idlop, $iduser)
// {
  
//     $sql = "SELECT COUNT(*) as KQ FROM dangky WHERE idlop = ? AND iduser = ?";

//     // Truyền tham số vào câu lệnh SQL và thực hiện truy vấn
//     $dklophoc = pdo_query($sql);


//     return $dklophoc;
// }

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


    function insert_lop($tenlop,$iduser,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,iduser,cahoc,ngaybatdau,ngayketthuc,idkhoahoc) values ('$tenlop','$iduser','$cahoc','$ngaybatdau','$ngayketthuc','$idkhoahoc')";
        pdo_execute($sql);
    }
    function delete_lop($idlop){
        $sql="DELETE FROM lop WHERE idlop=".$idlop;
        pdo_execute($sql);
    }
    function  update_lop($idlop,$tenlop,$cahoc,$ngaybatdau,$ngayketthuc,$iduser,$idkhoahoc){
            $sql="UPDATE lop SET idkhoahoc='".$idkhoahoc."', tenlop='".$tenlop."', cahoc='".$cahoc."', ngaybatdau='".$ngaybatdau."', ngayketthuc='".$ngayketthuc."', iduser='".$iduser."' WHERE idlop=".$idlop; 
            pdo_execute($sql);
        }
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
   
    // function loadall_lop_khoahoc($kyw="",$idlop=0){
    //     $sql = "SELECT * FROM lop WHERE 1";   
    //     if ($kyw != "") {
    //         $sql .= " AND tenlop LIKE '%" . $kyw . "%' ";
    //     }   
    //     if ($idlop > 0) {
    //         $sql .= " AND idkhoahoc = '" .$idlop. "' ";
    //     }    
    //     $sql .= " ORDER BY idlop DESC";   
    
    //     $listlop = pdo_query($sql); 
    //     return $listlop;
    // }
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
    
    function loadone_lop($idlop){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
            $lop=pdo_query_one($sql);
            return $lop;
        }
        function insert_dangky($idlop,$trangthai,$iduser){
            $sql = "INSERT INTO dangky (idlop, trangthai, iduser) VALUES ('$idlop', '$trangthai', '$iduser')";
            pdo_execute($sql);
        }
?>