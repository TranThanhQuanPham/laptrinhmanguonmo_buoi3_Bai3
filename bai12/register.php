<?php

// Kết nối MySQL
$conn = new mysqli("localhost", "root", "", "userdb");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra dữ liệu gửi lên
if (
    !isset($_POST["fullname"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["password"])
) {
    die("Thiếu dữ liệu.");
}

// Lấy dữ liệu từ form
$fullname = trim($_POST["fullname"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

// Kiểm tra dữ liệu
if ($fullname == "" || $email == "" || $password == "") {
    die("Vui lòng nhập đầy đủ thông tin.");
}

// Mã hóa mật khẩu
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Chuẩn bị câu lệnh SQL
$sql = "INSERT INTO users (fullname, email, password)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Gán dữ liệu vào câu lệnh
$stmt->bind_param("sss", $fullname, $email, $passwordHash);

// Thực thi
if ($stmt->execute()) {
    echo "Đăng ký thành công!";
} else {
    echo "Đăng ký thất bại: " . $stmt->error;
}

// Đóng kết nối
$stmt->close();
$conn->close();
