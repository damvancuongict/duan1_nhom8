<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
    <script>
        var gia=document.getElementsByClassName("gia");
        var sl=document.getElementsByClassName("sl");
        var tt=document.getElementsByClassName("tt");
        function thanhtien(i){
            tt[i].innerHTML=gia[i].value*sl[i].value
            // tinhtien()
        }
        window.onload=function(){
            for(i=0;i<gia.length;i++){
                tt[i].innerHTML=gia[i].value*sl[i].value;
            }
        }
    </script>
    <style>
        /* section{
        
        } */
        *{
            padding: 0;
            margin:0;
        }
        
        ul li{
            
            margin: 40px 30px;
            list-style: none;
            font-weight:bold;
            font-size:15px;
        }
        ul li a{
            text-decoration: none;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu{
            background: linear-gradient(to right, #0f2027,#203A43,#2c5364);
           
            position: fixed;
            height: 100%;
            float: left;
            width: 17%;
        }
        .table{
            background-color: rgb(248, 248, 248);
            width: 83%;
            margin: 0px 0px;
            float: right;
            height: 100%;
        }
        .table h2{
            margin:50px 100px;
            font-size:30px;
            color:#2c5364;
        }
        table{
            margin:50px 100px
        }
        button{
            padding: 5px 15px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        button a{
            text-decoration: none;
            
            color: white;
        }
        .add{
            margin: 0px 0px 30px 50px;
            padding: 10px 25px;
            background-color: rgb(95, 95, 196);
            border:none;
        }
        .add a{
            font-size:20px;
            font-weight:bold;
        }
        h2{
            margin:20px 0px ;
        }
        /* .table_body{
            display: grid;
            grid-template-columns: 70% 3% 27%;
        } */
        .ngan{
            width: 100%;
            height: 3px;
            background-color: gray;
        }.daubai td{
            font-weight:bold;
            
        }
        td{
            font-family: Arial, Helvetica, sans-serif;
            text-align:center;
            padding:10px 0px;
        }
        img{
            margin:20px 30px;
        }
        .fab{
            font-size: 30px;
        }
        .fas{
            font-size: 30px;
        }
        /* CSS cho nút button */
        .table input[type="button"] {
            background-color: #2c5364; /* Màu nền */
            border: none; /* Không viền */
            color: white; /* Màu chữ */
            padding: 10px 20px; /* Khoảng cách lề xung quanh chữ trong nút */
            text-align: center; /* Căn giữa chữ trong nút */
            text-decoration: none; /* Không gạch chân chữ trong nút */
            display: inline-block; /* Hiển thị như một phần tử inline-block */
            font-size: 16px; /* Cỡ chữ */
            margin: 4px 2px; /* Khoảng cách giữa các nút */
            cursor: pointer; /* Hình con trỏ chuột khi hover vào nút */
            border-radius: 4px; /* Bo tròn góc của nút */
        }

        /* Hover nút */
        .table input[type="button"]:hover {
            background-color: #0f2027; /* Màu nền thay đổi khi hover */
        }
            </style>
        </head>
<body>
    <section><i class=" "></i>
        <div class="menu">
        <img width="150" src="" alt="">
            <ul>
                <li><a href="../index2.php"><i class="fas fa-home"></i> - Trang chủ</a></li>
                <li><a href="index.php?act=listdm"><i class="fas fa-certificate"></i> - Quản Lý Danh mục</a></li>
                <li><a href="index.php?act=listkh"><i class="fas fa-book-open"></i> - Quản Lý Khóa Học</a></li>
                <li><a href="index.php?act=taikhoan"><i class="fas fa-user-circle"></i> - Quản Lý Tài Khoản</a></li>
                <li><a href="index.php?act=listlop"><i class="fas fa-school"></i> - Quản Lý Lớp Học</a></li>
                <li><a href="index.php?act=quanlydangky"><i class="fas fa-regular fa-graduation-cap"></i> - Quản Lý Đăng Ký</a></li>
            </ul>
        </div>
        
 