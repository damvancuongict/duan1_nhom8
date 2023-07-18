<?php
    function insert_lop($tenlop,$username,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,idgiaovien,cahoc,ngaybatdau,ngayketthuc,idkhoahoc) values ('$tenlop','$username','$cahoc','$ngaybatdau,$ngayketthuc','$idkhoahoc')";
        pdo_execute($sql);
    }
?>