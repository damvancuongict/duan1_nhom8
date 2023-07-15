<?php
 
function loadds_khoahoc($kyw="", $iddm) {
    $sql = "SELECT * FROM khoahoc WHERE 1";   
    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%' ";
    }   
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "' ";
    }    
    $sql .= " ORDER BY id DESC";   
    $listkh = pdo_query($sql); 
    return $listkh;
}
function load10_khoahoc_home(){
    $sql="SELECT * from khoahoc where 1 order by idkhoahoc desc limit 0,9";
    $listkh = pdo_query($sql);
    return $listkh;

  }
  function insert_khoahoc($tenkh,$gia,$filename,$mota,$iddm){
    $sql="INSERT INTO khoahoc(tenkhoahoc,gia,anh,mota,iddanhmuc) values ('$tenkh','$gia','$filename','$mota','$iddm')";
    pdo_execute($sql);
}

?>