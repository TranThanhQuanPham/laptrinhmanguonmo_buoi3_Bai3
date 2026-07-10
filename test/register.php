<?php
$con= new mysqli("localhost","root","","userdb");
//kiểm tra kết nối 
if($con->connect_error){
    die("kết nối thât bại ". $con->connect_error);
}
// kiểm tra dữ liệu gửi lên 