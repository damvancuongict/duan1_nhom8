
<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro =$_REQUEST['idpro'];
    $listbl=loadall_bl($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    .guibl{
        border: 2px solid   #bbb;
    }
    .guibl input{
        border: 2px solid   #bbb;
        width: 350px;
        height: 40px;
        border-radius: 5px;
    }
    .guibl .gui{
        border: 2px solid   #bbb;
        width: 150px;
        height: 40px;
        border-radius: 5px;
    }

</style>
<body> 


<div class="row mb ">
                    <div class="boxstitle">BÌNH LUẬN</div>
                    <div class="boxcontent binhluan">
                        <table>
                                   <?php
                                           
                                                foreach ($listbl as $bl) {                                              
                                                    extract($bl);
                                                    echo '<tr><td>'.$noidung.'</td>';
                                                   
                                                    echo '<td>'.$iduser.'</td>';
                                                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                                                }
                                                    ?>             
                                    </div>
                        </table>
                        <div class="boxfooter guibl"> 
                            <?php if (isset($_SESSION['user'])) : ?>
                                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                                    <input type="text" name="noidung" id="">
                                    <input class="gui" type="submit" name="guibinhluan" value="GỦI BÌNH LUẬN">
                                </form>
                                <?php
                                if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                                    $noidung = $_POST['noidung'];
                                    $idpro = $_POST['idpro'];
                                    $isuser = $_SESSION['user']['id'];
                                    $ngaybinhluan = date('h:i:sa d/m/y');
                                    inser_binhluan($noidung, $idpro, $isuser, $ngaybinhluan);
                                    header("Location: ".$_SERVER['HTTP_REFERER']);
                                }
                                ?>
                            <?php else : ?>
                                <p>Vui lòng đăng nhập để gửi bình luận.</p>
                            <?php endif; ?>
                        </div>

</body>
</html>