
<style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        } */

        .container2 {

            max-width: 1200px;
           margin:auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
        }
            .form1{
                display: flex;
            }
            .trai p{
               
                margin-top: 50px;
                
            }
            .trai {
                text-align: center;
                width: 500px;
                height: 600px;
                flex: 1;
                margin-right: 10px;
                border-radius: 5px;
                border: solid 0.5px #f1ebeb;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

        .phai{
                 width: 600px;
                height: 500px;
                
                flex: 1;
                margin-right: 10px;
                border-radius: 5px;
                border: solid 0.5px #f1ebeb;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        

        .form-group label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #444444;
        }

        .form-group span {
            color: #444444;
        }

        .nutthanhtoan{
            display: flex;
            /* justify-content: flex-end; */
            margin-top: 20px;
        }

        .payment-options button {
            margin: 0 5px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit {
            background-color: #007BFF;
        }

        .btn-cancel {
            background-color: #FF3333;
        }
        .tieude{
            width: 100%;
        }
        .duoi{
                 width: 550px;
                height: 300px;
               text-align: center;
                flex: 1;
                margin-top: 30px;
                margin-right: 10px;
                border-radius: 5px;
                border: solid 0.5px #f1ebeb;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .duoi p{
                
                margin-top: 30px;
        }
        .button{
            margin-left: 500px;
        }
    </style>
 <div class="gridarea">
                         <div class="container2" style="margin-top:100px">
                             <div class="">
                                 <div class="gridarea__img">
                                 <div class="chitietdangky">
                                 <div>
           
                <div class="tieude">
                 <h2 style="text-align: center; color: blue;">Đăng ký khóa học</h2>
            </div>
                <div class="form1">

               
                <div class="trai">
                     <p style="color:red; text-align: center;">Thông tin đăng ký của bạn sẽ được gửi về mail</p>
                     <?php
                            $idlopw = loadall_idlop($idlop);
                            echo ' <h4  style="color: #444444">Tên khóa học: ' . $idlopw['tenkhoahoc'] . '</h4>';
                            echo ' <h4 style="color: #444444">Tên lớp: ' . $idlopw['tenlop'] . '</h4>';
                            echo ' <h4 style="color: #444444">Ca Học: ' . $idlopw['cahoc'] . '</h4>';
                            echo ' <h4 style="color: #444444">Ngày Khai Giảng: ' . $idlopw['ngaybatdau'] . '</h4>';
                            echo ' <h4 style="color:red">Còn Lại: ' . $idlopw['soluong'] . ' Slot</h4>';
                            echo ' <h4 style="color:red">Học Phí: ' . $idlopw['gia'] . '</h4>';  
                            
                           
                                ?>        
               
             </div>
            
             <div class="phai">
                    <div class="payment-options">
                            <div class="nutthanhtoan">

                                    <div class="tructiep">
                                    <button type="button" onclick="showDiaChi()">THANH TOÁN TRỰC TIẾP</button>     
                                    </div>

                                    <div class="online">
                                    <button type="button" onclick="showHinhAnh()">CHUYỂN KHOẢN</button>
                                    </div> 
                            </div>
                        
                            <div class="noidungthanhtoan">
                                <div class="duoi" id="diaChi" style="display: none;">
                                <p>
                                    Địa chỉ: 52A Nguyễn Thái Sơn, Phường 3, Quận Gò Vấp, TPHCM<br>
                                    Số tài khoản: 0071000944930 VIETCOMBANK - HOANG QUANG THANG
                                </p>
                            
                            </div>

                            <div class="duoi" id="hinhAnh" style="display: none;">
                                <img src="view/img/vimomo.png" alt="">
                            </div>     
                    </div>
                     
                </div>
                       
                          <a href=""></a>
            </div>
                
        </div>
        <div class="form-xacnhan" style="text-align: center;">
                <form method="post" action="index2.php?act=dangkydanhsachlop" id="confirmForm">
            <?php 
                $iaus = $_SESSION['user'];
                $iduser = $iaus['iduser'];
                echo '<input type="" name="iduser" value="' . $iduser . '">';
                echo '<input type="" name="idlop" value="' . $idlop . '">';
                echo '<input type="" name="gia" value="' . $gia . '">';
                echo '<input type="" name="trangthai" id="trangthai" value="">';
                
            ?><div class="button">
                <button type="button" class="btn-submit" onclick="validateForm()">Xác Nhận</button>
                <button type="button" class="btn-submit" ><a href="index2.php">Hủy</a></button>
               
                
            </div>
            
        </form>

    </div> 
    </div> 
       
            
     
       
 </div>
 </div>
 </div>
 </div>
 </div>
<script>
    function showDiaChi() {
        var diaChiDiv = document.getElementById("diaChi");
        var hinhAnhDiv = document.getElementById("hinhAnh");
        diaChiDiv.style.display = "block";
        hinhAnhDiv.style.display = "none";
    }

    function showHinhAnh() {
        var diaChiDiv = document.getElementById("diaChi");
        var hinhAnhDiv = document.getElementById("hinhAnh");
        diaChiDiv.style.display = "none";
        hinhAnhDiv.style.display = "block";
    }
    function dangKy() {
            var form = document.getElementById("confirmForm");
            var isThanhToanTrucTiep = document.getElementById("diaChi").style.display === "block";

            if (isThanhToanTrucTiep) {
                form.action = "index2.php?act=dangkydanhsachlop&idlop=<?php echo $idlop; ?>"; // Thay thế 'url_trang_thanh_toan_truc_tiep' bằng URL thực tế của trang thanh toán trực tiếp
            } else {
                form.action = "index2.php?act=dangkydanhsachlop&idlop=<?php echo $idlop; ?>"; // Thay thế 'url_trang_chuyen_khoan' bằng URL thực tế của trang chuyển khoản
            }

            form.submit();
        }
        function huyBo() {
        // Thực hiện các thao tác cần thiết khi click vào nút "Hủy bỏ"
        // Ví dụ: chuyển hướng sang trang khác
        window.location.href = "index2.php";
    }

        function validateForm() {
        var isThanhToanTrucTiep = document.getElementById("diaChi").style.display === "block";
        var isThanhToanChuyenKhoan = document.getElementById("hinhAnh").style.display === "block";

        if (!isThanhToanTrucTiep && !isThanhToanChuyenKhoan) {
            alert("Vui lòng chọn hình thức thanh toán!");
        } else {
            // Đặt giá trị cho trường ẩn "trangthai" dựa trên phương thức thanh toán được chọn
            var trangthaiInput = document.getElementById("trangthai");
            trangthaiInput.value = isThanhToanTrucTiep ? "0" : "1";

            // Gửi biểu mẫu
            dangKy();
        }
    }
</script>
