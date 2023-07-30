<?php
function dangkylop($idlop,$iduser){
    $sql = "INSERT INTO dangky (idlop, iduser) VALUES ($idlop, $iduser)";

    pdo_execute($sql);
}


function loadlopdangky(){      
     $sql = "SELECT * FROM dangky WHERE iduser = iduser ORDER BY iduser DESC";      
    $listlop = pdo_query($sql);
    return $listlop;
}

?>