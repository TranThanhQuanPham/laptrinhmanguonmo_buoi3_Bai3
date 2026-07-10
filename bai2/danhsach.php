<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm vào danh sách</title>
</head>
<body>

<h2>Bài 3: Thêm phần tử vào danh sách</h2>

<input type="text" id="item" placeholder="Nhập tên">

<button onclick="addItem()">Thêm</button>

<ul id="list"></ul>

<script>
function addItem() {
    let val = document.getElementById("item").value;

    if (val.trim() !== "") {
        let li = document.createElement("li");
        li.innerText = val;
        document.getElementById("list").appendChild(li);

        // Xóa nội dung ô nhập sau khi thêm
        document.getElementById("item").value = "";
    }
}
</script>

</body>
</html> 