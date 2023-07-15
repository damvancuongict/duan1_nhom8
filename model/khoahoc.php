<?php
  function insert_khoahoc($tenkh,$gia,$filename,$mota,$iddm){
    $sql="INSERT INTO khoahoc(tenkhoahoc,gia,anh,mota,iddm) values ('$tenkh','$gia','$filename','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_khoahoc($kyw="",$iddm=0){
    $sql="SELECT * FROM khoahoc WHERE 1";
    if($kyw!=""){
        $sql.=" AND name LIKE '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" AND iddm ='".$iddm."'";
    }
    $sql.=" ORDER BY idkhoahoc desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}



?>