<?php
// Trong file chứa hàm updatetrangthai()
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["iddangky"])) {
    // Nhận giá trị của tham số 'iddangky'
    $iddangky = $_GET["iddangky"];
    $sql = "UPDATE dangky SET trangthai = '1' WHERE iddangky = $iddangky";
    // Thực hiện các thao tác xử lý dữ liệu tùy theo logic ứng dụng của bạn.
    // Ví dụ: Cập nhật trạng thái của đăng ký trong cơ sở dữ liệu dựa vào $iddangky.
    // Giả sử bạn có hàm updateStatusInDatabase() để cập nhật trạng thái.

    // Gọi hàm để cập nhật trạng thái trong cơ sở dữ liệu
    $success = updateStatusInDatabase($iddangky);

    // Kiểm tra kết quả cập nhật và trả về phản hồi phù hợp
    if ($success) {
        // Trả về phản hồi thành công nếu cập nhật thành công
        echo "success";
    } else {
        // Trả về phản hồi lỗi nếu cập nhật không thành công
        echo "error";
    }
}

?>
