<?php
  function insert_khoahoc($tenkh,$gia,$filename,$mota,$iddm){
    $sql="INSERT INTO khoahoc(tenkhoahoc,gia,anh,mota,iddm) values ('$tenkh','$gia','$filename','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_khoahoc($kyw="",$idkhoahoc=0){
    $sql="SELECT * FROM khoahoc WHERE 1";
    if($kyw!=""){
        $sql.=" AND tenkhoahoc LIKE '%".$kyw."%'";
    }
    if($idkhoahoc>0){
        $sql.=" AND idkhoahoc ='".$idkhoahoc."'";
    }
    $sql.=" ORDER BY idkhoahoc desc";
    $listkh=pdo_query($sql);
    return $listkh;
}
function delete_khoahoc($idkhoahoc){
    $sql="DELETE FROM khoahoc WHERE idkhoahoc=".$idkhoahoc;
    pdo_execute($sql);
}
function  update_khoahoc($idkhoahoc,$tenkh,$gia,$filename,$mota,$iddm){
    if($filename!="")
        $sql="UPDATE khoahoc SET iddm='".$iddm."', tenkhoahoc='".$tenkh."', gia='".$gia."', mota='".$mota."', anh='".$filename."' WHERE idkhoahoc=".$idkhoahoc; 
    else 
        $sql="UPDATE khoahoc SET iddm='".$iddm."', tenkhoahoc='".$tenkh."', gia='".$gia."', mota='".$mota."' WHERE idkhoahoc=".$idkhoahoc;
        pdo_execute($sql);
    }
function loadone_khoahoc($idkhoahoc){
    $sql="SELECT * FROM khoahoc WHERE idkhoahoc=".$idkhoahoc;
    $kh=pdo_query_one($sql);
    return $kh;
}
?>