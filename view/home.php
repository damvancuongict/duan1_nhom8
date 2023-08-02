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

  .gridarea .courses-content-wrapper {
    margin-top: 10px;
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



