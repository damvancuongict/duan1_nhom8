<?php
// Trong file chứa hàm updatetrangthai()
function updatetrangthai() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trangthai']) && isset($_POST['id'])) {
        // Lấy dữ liệu từ yêu cầu POST
        $trangthai = $_POST['trangthai'];
        $id = $_POST['id'];

        try {
            // Sử dụng Prepared Statement và biến $pdo từ pdo.php để cập nhật trạng thái
            $sql = "UPDATE dangky SET trangthai = :trangthai WHERE iddangky = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':trangthai', $trangthai, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            // Trả về kết quả cho AJAX (ví dụ: 'success')
            echo 'success';
        } catch (PDOException $e) {
            // Xử lý lỗi nếu có
            // Trả về kết quả 'error' hoặc thông báo lỗi cụ thể tùy bạn
            echo 'error';
        }
    } else {
        // Trường hợp không có đủ dữ liệu trong yêu cầu POST
        // Trả về kết quả 'error' hoặc thông báo lỗi cụ thể tùy bạn
        echo 'error';
    }
}

?>
