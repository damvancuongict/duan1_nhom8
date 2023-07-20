<?php
    function insert_lop($tenlop,$username,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,idgiaovien,cahoc,ngaybatdau,ngayketthuc,idkhoahoc) values ('$tenlop','$username','$cahoc','$ngaybatdau,$ngayketthuc','$idkhoahoc')";
        pdo_execute($sql);
    }
    function loadall_lop(){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $listlop=pdo_query($sql);
        return $listlop;
    
    }
?>