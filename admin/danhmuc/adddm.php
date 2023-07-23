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
       
       
</style>
<div class="table">
<div class="row header" ><h1>THÊM MỚI DANH MỤC</h1></div>
            <div class="row formcontend">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã danh mục <br>
                        <input type="text" name="madanhmuc" disabled>
                    </div>
                    <div class="row mb10">
                        Tên danh mục <br>
                        <input type="text" name="tendanhmuc" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                            echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
        </div>


