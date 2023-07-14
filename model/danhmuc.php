<?php
    function insert_danhmuc($tendanhmuc){
        $sql="insert into danhmuc(tendm) values ('$tendanhmuc')";
        pdo_execute($sql);
    }
    function delete_danhmuc($iddm){
        $sql="delete from danhmuc where id=".$iddm;
                    pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by iddm desc";
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