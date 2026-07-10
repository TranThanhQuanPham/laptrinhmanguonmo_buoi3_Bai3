<?php

$file = "todo.json";

// Đọc dữ liệu
if(isset($_GET['action']) && $_GET['action']=="read"){

    if(file_exists($file)){

        echo file_get_contents($file);

    }else{

        echo "[]";

    }

    exit;

}

// Ghi dữ liệu

$data = file_get_contents("php://input");

file_put_contents($file,$data);

echo "saved";

?>