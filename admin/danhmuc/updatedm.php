<style>
    .body{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: red;
            background-size: 100% 100%;
        }
        .table{
            width: 400px;
            height: 350px;
           
            margin: auto;
            position: relative;
            z-index: 1;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            border-radius: 5px;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        h2{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 900;
        }
        form{
            margin: 0px 50px;
            
        }
        input{
            width: 300px;
            padding: 10px 0px;
            border-radius: 5px;
            border: 2px solid tomato;
        }.anh{
            border: none;
        }
        .row{
            margin: 20px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        button{
            padding: 10px 60px;
            border: none;
            background-color: tomato;
            color: white;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            border-radius: 10px;
        }
        .label {
    font-weight: bold;
}

input[type="text"], input[type="submit"], input[type="reset"], input[type="button"] {
    padding: 8px 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

input[type="text"] {
    width: 100%;
}

input[type="submit"], input[type="reset"], input[type="button"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
<?php

    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="table">
    <div class="row header">
        <h1>CẬP NHẬT LOẠI DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                <label for="madanhmuc">Mã danh mục</label><br>
                <input type="text" name="madanhmuc" id="madanhmuc" disabled>
            </div>
            <div class="row mb10">
                <label for="tendanhmuc">Tên danh mục</label><br>
                <input type="text" name="tendanhmuc" id="tendanhmuc" value="<?php if(isset($tendm)&&($tendm!="")) echo $tendm;?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="iddm" value="<?php if(isset($iddm)&&($iddm!="")) echo $iddm;?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
            ?>
        </form>
    </div>
</div>