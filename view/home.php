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
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* Chia thành 4 cột */
    grid-gap: 20px; /* Khoảng cách giữa các cột */
  }

  .event-wrapper {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.event-wrapper li {
    width: 500px; /* Điều chỉnh chiều rộng của mỗi lớp học */
    display: flex;
    gap: 20px;
}

.event-wrapper li .event-container {
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
}

.event-wrapper li:hover .event-container {
    background-color: #f0ad4e; /* Màu vàng khi hover vào khung lớp */
}

.event-content-holder h3 a {
    color: #333;
    text-decoration: none;
}

.event-content-holder h3 a:hover {
    color: #007bff;
}

.event-calender-holder {
    display: flex;
    flex-direction: column;
}

.date-wrapper {
    display: flex;
    align-items: center;
}

.circle {
    width: 15px;
    height: 15px;
    background-color: #f0ad4e;
    border-radius: 50%;
    margin-right: 10px;
}

.date {
    font-size: 16px;
    font-weight: bold;
}

.day {
    font-size: 24px;
    margin-right: 5px;
}

.month {
    font-size: 16px;
}

</style>

<div class="gridarea">
  <div class="container">
    <?php
    $i = 0;
    foreach ($khoahoc as $sp) {
      extract($sp);
      $linkkh = "index2.php?act=dangkykhoahoc&idkhoahoc=" . $idkhoahoc;
      $anh = $img_path . $anh;
      if (($i == 2) || ($i == 5) || ($i == 8)) {
        $mr = "";
      } else {
        $mr = "mr";
      }
    //   <div class="roww img"><a href="' . $linkkh . '"><img src="' . $anh . '" alt=""></a></div>
      echo '
      <div class="' . $mr . '">
        <div class="courses-img-wrapper hvr-bounce-to-bottom">
          <a href="' . $linkkh . '">
            <img class="img-responsive" style="width: 265px;height: 190px;" src="' . $anh . '" alt="courses">
            <div class="overlay">Xem chi tiết</div>
          </a>
        </div>
        <div class="courses-content-wrapper">
          <h3 class="item-title"><a href="' . $linkkh . '"><strong>' . $tenkhoahoc . '</strong></a></h3>
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
                <h2 class="title-default-left">Tin tức gần đây</h2>
                <ul class="news-wrapper">
                    <?php
                        foreach ($news as $ns) {
                            ?>
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img style="width: 150px;height: 101px" src="public/layout/imagesnews/<?php echo $ns->hinh; ?> " class="img-responsive"
                                                     alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html"><?php echo $ns->ten_tin_tuc?></a></h3>
                                    <div class="post-date"><?php echo date('d-m-Y', strtotime($ns->ngay_tao));?></div>
                                    <p><?php echo $ns->mo_ta_ngan;?></p>
                                </div>
                            </li>
                            <?php
                        }
                    ?>
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
                <div class="event-calender-wrapper">
                    <div class="event-calender-holder">
                        <div class="date-wrapper">
                            <div class="circle"></div>
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


