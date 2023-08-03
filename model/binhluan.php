<?php
function inser_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan)VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
    

}
function loadall_binhluan($idpro){

    $sql="SELECT *FROM binhluan where 1";
    if($idpro>0)
    $sql.=" AND idpro='".$idpro."'";
    $sql.=" ORDER BY ID DESC";
    $listbl=pdo_query($sql);
    return $listbl;
}
function loadall_bl($idpro){
    
    $sql="SELECT *FROM binhluan   ORDER BY ID DESC";
    
    $listbl=pdo_query($sql);
    return $listbl;
}
function xoa_bl(){
    $sql="DELETE from binhluan where id=".$_GET['id'];
    pdo_query($sql);
}

?>