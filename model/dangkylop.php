<?php
function dangkylop($idlop,$iduser){
    $sql = "INSERT INTO dangky (idlop, iduser) VALUES ($idlop, $iduser)";

    pdo_execute($sql);
}

?>