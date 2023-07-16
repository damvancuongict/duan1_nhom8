<?php
function loadalltaikhoan() {
    $sql = "SELECT * FROM user ORDER BY iduser DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_user(){
    $sql="select * from user order by id desc";
    $listuser=pdo_query($sql);
    return $listuser;
}
function insert_user($email,$user,$pass){
    $sql="insert into user(email,username,password) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from user where user='".$user."' AND password='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_user($id,$user,$pass,$email,$address,$tel){
    $sql="update user set user='".$user."',password='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where iduser=".$iduser;
    pdo_execute($sql);
}
?>

