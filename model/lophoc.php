<?php
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
    function loadone_lop($idlop){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $lop=pdo_query_one($sql);
        return $lop;
    }
    function loadall_lop_user(){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $listlop=pdo_query($sql);
        return $listlop;
    } 
    function loadall_lop_user2(){
        $sql = "SELECT l.tenlop, l.cahoc,l.idlop,l.idkhoahoc,l.soluong,l.soluongtoida, l.ngaybatdau, l.ngayketthuc, l.soluong, u.username
        FROM lop l
        JOIN user u ON l.iduser = u.iduser
        WHERE u.role = 2";
        $listlophoc=pdo_query($sql);
        return $listlophoc;
    } 
    function load_ten_kh($idkhoahoc){
        if($idkhoahoc>0){
            $sql="select * from danhmuc where idlop=".$idkhoahoc;
            $kh=pdo_query_one($sql);
            extract($kh);
            return $tenlop;
        }else{
            return "";
        }
        
    }
    function loadall_lop($kyw="",$idkhoahoc=0){
        $sql="SELECT * FROM lop WHERE 1";
        if($kyw!=""){
            $sql.=" AND tenlop LIKE '%".$kyw."%'";
        }
        if($idkhoahoc>0){
            $sql.=" AND idkhoahoc ='".$idkhoahoc."'";
        }
        $sql.=" ORDER BY idlop desc";
        $listlop=pdo_query($sql);
        return $listlop;
    }
    function loadall_lop_khoahoc($kyw="",$idlop=0){
        $sql = "SELECT * FROM lop WHERE 1";   
        if ($kyw != "") {
            $sql .= " AND tenlop LIKE '%" . $kyw . "%' ";
        }   
        if ($idlop > 0) {
            $sql .= " AND idkhoahoc = '" .$idlop. "' ";
        }    
        $sql .= " ORDER BY idlop DESC";   
    
        $listlop = pdo_query($sql); 
        return $listlop;
    }
    // function loadall_kh_danhmuc($kyw="",$idkhoahoc=0){
    //     $sql = "SELECT * FROM khoahoc WHERE 1";   
    //     if ($kyw != "") {
    //         $sql .= " AND tenkhoahoc LIKE '%" . $kyw . "%' ";
    //     }   
    //     if ($idkhoahoc > 0) {
    //         $sql .= " AND iddm = '" .$idkhoahoc. "' ";
    //     }    
    //     $sql .= " ORDER BY idkhoahoc DESC";   
    
    //     $listkh = pdo_query($sql); 
    //     return $listkh;
    // }
?>