<style>
  /* Nền màu xám nhạt cho gridarea */
  .gridarea .courses-img-wrapper {
    position: relative; /* Để tạo khung cho hover */
    overflow: hidden; /* Ẩn phần bị che lên */
  }

  /* Hiệu ứng hover */
  .gridarea .courses-img-wrapper::before {
    content: "";
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 165, 0, 0.7); /* Màu cam đậm nhạt (sử dụng rgba để chỉ định độ mờ) */
    opacity: 0; /* Bắt đầu ẩn */
    transition: top 0.5s, opacity 0.5s; /* Thời gian hiệu ứng */
  }

  /* Hiển thị chữ "Xem chi tiết" */
  .gridarea .courses-img-wrapper .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    color: #ffffff;
    opacity: 0; /* Bắt đầu ẩn */
  }

  /* Hover vào hiển thị hiệu ứng và chữ "Xem chi tiết" */
  .gridarea .courses-img-wrapper:hover::before,
  .gridarea .courses-img-wrapper:hover .overlay {
    top: 0; /* Hiển thị hiệu ứng sổ xuống */
    opacity: 1; /* Hiển thị hiệu ứng màu cam */
  }

  /* Đổi pointer-events để cho phép click vào lớp overlay */
  .gridarea .courses-img-wrapper .overlay {
    pointer-events: auto;
  }

  /* Grid layout */
  .gridarea .container {
    display: flex;
    grid-template-columns: repeat(4, 1fr); /* Chia thành 4 cột */
    grid-gap: 20px; /* Khoảng cách giữa các cột */
  }

  

  .event-wrapper {
  list-style: none;
  padding: 0;
}

.event-container {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  transition: box-shadow 0.3s; /* Change to box-shadow for transition */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); /* Add box shadow for a subtle effect */
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
}

.event-container:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Increase the shadow on hover */
  background-color: #f0ad4e; /* Màu vàng khi hover vào khung lớp */
  color: #fff; /* Change text color on hover */
}

.left-side {
  flex: 1;
  display: flex;
  align-items: center;
}

.right-side {
  flex: 1;
  text-align: right;
}

.event-calender-holder {
  margin-right: 10px;
}

.event-calender-wrapper .circle {
  width: 20px;
  height: 20px;
  background-color: #007bff;
  border-radius: 50%;
  display: inline-block;
}

.event-calender-wrapper .date {
  display: inline-block;
  margin-left: 5px;
}

.event-content-holder h3 {
  margin: 0;
  font-size: 18px;
}

.event-content-holder ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.event-content-holder li {
  font-size: 14px;
  color: #555;
}

.right-side ul li {
  margin-bottom: 5px;
}

.right-side a {
  color: #007bff;
  text-decoration: none;
}

.right-side a:hover {
  text-decoration: underline;
}


</style>

<div class="gridarea">
  <div class="container">
    <?php
    $i = 0;
    foreach ($khoahoc as $sp) {
      if ($i >= 4) {
        break; 
      }

      extract($sp);
      $linkkh = "index2.php?act=dangkykhoahoc&idkhoahoc=" . $idkhoahoc;
      $anh = $img_path . $anh;
      $mr = ($i % 3 === 0) ? "" : "mr"; 

      echo '
      <div class="' . $mr . '">
        <div class="courses-img-wrapper hvr-bounce-to-bottom">
          <a href="' . $linkkh . '">
            <img class="img-responsive" style="width: 265px; height: 190px;" src="' . $anh . '" alt="courses">
            <div class="overlay">Xem chi tiết</div>
          </a>
        </div>
        <div class="courses-content-wrapper">
          <h3 class="item-title"><a href="' . $linkkh . '"><strong>' . $tenkhoahoc . '</strong></a></h3>
        </div>
        <div class="thoigian">
          <ul class="courses-info">
            <li>Thời gian học: ' . $thoigiankhoahoc . ' Tuần</li>
          </ul>
        </div>
      </div>';
      $i += 1;
    }
    ?>
  </div>
</div>

<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
              
                <ul class="news-wrapper">
                <div class="boxstitle">BÌNH LUẬN</div>
                    <div class="boxcontent binhluan">
                        <table>
                                   
                        </table>
                        <div class="boxfooter guibl"> 
                            <?php if (isset($_SESSION['user'])) : ?>
                                
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

                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                <h2 class="title-default-left">Lớp học sắp khai giảng</h2>
                <ul class="event-wrapper">
    <?php
    foreach ($new as $nc) {
        extract($nc);
    ?>
        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <div class="event-container">
                <div class="left-side">
                    <div class="event-calender-wrapper">
                        <div class="event-calender-holder">
                            <div class="date-wrapper">
                               
                                <div class="date">
                                    <span class="day"><?php echo date('d', strtotime($ngaybatdau)); ?></span>
                                    <span class="month"><?php echo date('M', strtotime($ngaybatdau)); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-content-holder">
                        <?php
                        if (isset($_SESSION['user']['iduser'])) {
                            // Người dùng đã đăng nhập
                            $daDangKy = false;
                            foreach ($lopnguoidung as $lophoc) {
                                if ($lophoc['idkhoahoc'] == $idkhoahoc && $lophoc['idlop'] == $idlop) {
                                    $daDangKy = true;
                                    break;
                                }
                            }

                            if ($daDangKy) {
                                // Người dùng đã đăng ký lớp này, hiển thị tên lớp và chuyển hướng đến trang xem chi tiết khóa học
                                echo "<h3><a href=\"index2.php?act=dangkykhoahoc&idkhoahoc={$idkhoahoc}\">$tenlop</a></h3>";
                            } else {
                                // Người dùng chưa đăng ký lớp này, hiển thị link đăng ký lớp
                                echo "<h3><a href=\"index2.php?act=dangkylop&idlop={$idkhoahoc}\">$tenlop</a></h3>";
                            }
                        } else {
                            // Người dùng chưa đăng nhập, hiển thị link đăng nhập
                            echo "<h3><a href=\"index2.php?act=dangnhap\">$tenlop</a></h3>";
                        }
                        ?>
                    </div>
                </div>
                <div class="right-side">
                    <ul>
                        <li><?php echo $cahoc; ?></li>
                        <li><?php echo $tenkhoahoc; ?></li>
                    </ul>
                </div>
            </div>
        </li>
    <?php
    };
    ?>
</ul>

            </div>
        </div>
    </div>
</div>


