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
    $listsp = pdo_query($sql); 
    return $listsp;
}

?>