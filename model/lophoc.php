<?php
    function insert_lop($tenlop,$iduser,$cahoc,$ngaybatdau,$ngayketthuc,$idkhoahoc){
        $sql="INSERT INTO lop(tenlop,iduser,cahoc,ngaybatdau,ngayketthuc,idkhoahoc) values ('$tenlop','$iduser','$cahoc','$ngaybatdau,$ngayketthuc','$idkhoahoc')";
        pdo_execute($sql);
    }
<<<<<<< HEAD
=======
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
    //         $sql .= " AND idkhoahoc = '" .$idlop. "' ";
    //     }    
    //     $sql .= " ORDER BY idlop DESC";   
    
    //     $listlop = pdo_query($sql); 
    //     return $listlop;
    // }
    // function loadall_lop_user($kyw="",$iduser=0){
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
>>>>>>> 2141e4f93cae4db664d62a10c050a4c10f0501e6
    function loadall_lop(){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $listlop=pdo_query($sql);
        return $listlop;
    
<<<<<<< HEAD
       
    } 
    function loadone_lop($idlop){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
            $lop=pdo_query_one($sql);
            return $lop;
        }

=======
    }
>>>>>>> 2141e4f93cae4db664d62a10c050a4c10f0501e6
?>