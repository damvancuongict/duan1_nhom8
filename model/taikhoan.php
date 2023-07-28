<?php

function loadalltaikhoan() {
    $sql = "SELECT * FROM user ORDER BY iduser DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function checkuser($user, $pass) {
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $tk = pdo_query_one($sql);
    return $tk;
}

// function loadall_user(){
//     $sql="select * from user order by id desc";
//     $listuser=pdo_query($sql);
//     return $listuser;
// }
// function insert_user($email,$user,$pass){
//     $sql="insert into user(email,username,password) values('$email','$user','$pass')";
//     pdo_execute($sql);
// }

// function checkuser($username,$password){
//     $sql="select * from user where username='".$username."' AND password='".$password."'";
//     $role=pdo_query_one($sql);
//     return $role[0]['role'];
// }
// function loadalltaikhoan(){
//     $sql = "SELECT * FROM user ORDER BY iduser DESC";
//     $listtaikhoan = pdo_query($sql);
//     return $listtaikhoan;
// }
// function checkuser($username,$password){
//     $sql="select * from user where username='".$username."' AND password='".$password."'";
//     $role=pdo_query_one($sql);
//     return $role[0]['role'];
// }
// function loadalltaikhoan(){
//     $sql="select * from user order by iduser desc";
//     $listuser=pdo_query($sql);
//     return $listuser;
// }
function insert_taikhoan($username,$password,$email){

    $sql="INSERT INTO `user` (`username`,`password`,`email`) values('$username','$password','$email')";
    pdo_execute($sql);
}
function loadone_tk($iduser){
    $sql="select * from user where iduser=".$iduser;
    $us=pdo_query_one($sql);
    return $us;
}
//Kiểm tra username và pass để đăng nhập
// function checkuser($username, $password){ 
//     $sql="select * from user where username='".$username."' AND password='".$password."'";
//     $tk=pdo_query_one($sql);
//     return $tk;
// }
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

