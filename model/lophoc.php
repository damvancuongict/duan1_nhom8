<?php
    function insert_lop($tenlop,$iduser,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,iduser,cahoc,ngaybatdau,ngayketthuc,idkhoahoc) values ('$tenlop','$iduser','$cahoc','$ngaybatdau,$ngayketthuc','$idkhoahoc')";
        pdo_execute($sql);
    }
    
    function loadall_lophoc($kyw="",$idkhoahoc=0){
        $sql="SELECT * FROM lophoc WHERE 1";
        if($kyw!=""){
            $sql.=" AND tenlop LIKE '%".$kyw."%'";
        }
        if($idlop>0){
            $sql.=" AND idlop ='".$idlop."'";
        }
        $sql.=" ORDER BY idlop desc";
        $listkh=pdo_query($sql);
        return $listkh;
    }
    // function loadall_lop_khoahoc($kyw="",$idkhoahoc=0){
    //     $sql = "SELECT * FROM lophoc WHERE 1";   
    //     if ($kyw != "") {
    //         $sql .= " AND tenlop LIKE '%" . $kyw . "%' ";
    //     }   
    //     if ($idlop > 0) {
    //         $sql .= " AND iduser = '" .$idlop. "' ";
    //     }    
    //     $sql .= " ORDER BY idlop DESC";   
    
    //     $listlop = pdo_query($sql); 
    //     return $listlop;
    // }
?>