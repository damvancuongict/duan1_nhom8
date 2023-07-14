<?php
 function load10_khoahoc_home(){
    $sql="SELECT * from khoahoc where 1 order by id desc limit 0,9";
    $listsp=pdo_query($sql);
    return $listsp;

  }
function loadds_khoahoc($kyw="", $iddm) {
    $sql = "SELECT * FROM khoahoc WHERE 1";   
    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%' ";
    }   
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "' ";
    }    
    $sql .= " ORDER BY id DESC";   
    $listsp = pdo_query($sql); 
    return $listsp;
}

?>