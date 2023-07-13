<?php
    function insert_danhmuc($tenkhoahoc){
        $sql="insert into danhmuc(tendm) values ('$tenkhoahoc')";
        pdo_execute($sql);
    }
    function delete_danhmuc($iddm){
        $sql="delete from danhmuc where id=".$iddm;
                    pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($iddm){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        return $dm;
        
    }
    function update_danhmuc($iddm,$tendm){
        $sql="update danhmuc set name='".$tendm."' where id=".$iddm;
        pdo_execute($sql);
    }
?>