<?php
function loadalltaikhoan() {
    $sql = "SELECT * FROM user ORDER BY iduser DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}


?>