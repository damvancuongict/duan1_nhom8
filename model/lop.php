<?php

function loadall_lop(){
    $sql="select * from lop";
    $listlop=pdo_query($sql);
    return $listlop;

}



?>
