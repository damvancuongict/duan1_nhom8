<?php
function loadall_user(){
    $sql="select * from user order by iduser desc";
    $listuser=pdo_query($sql);
    return $listuser;
}
function insert_user($username,$password,$email,$address,$tel){
    $sql="INSERT INTO `user` ( `username`, `password`, `email`, `address`, `tel`) VALUES ('$username', '$password', '$email', '$address', '$tel')";
    pdo_execute($sql);
}
function loadone_tk($iduser){
    $sql="select * from user where iduser=".$iduser;
    $us=pdo_query_one($sql);
    return $us;
}
//Kiểm tra username và pass để đăng nhập
function checkuser($username, $password){ 
    $sql="select * from user where username='".$username."' AND password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function checkemail($email){
    $sql="select * from user where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function delete_tk($iduser){
    $sql="DELETE FROM user WHERE iduser=".$iduser;
    pdo_execute($sql);
}
function update_tk($iduser,$username,$password,$email,$address,$tel,$role){
    $sql="update user set user='".$username."',password='".$password."',email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' where iduser=".$iduser;
    pdo_execute($sql);
}
?>

