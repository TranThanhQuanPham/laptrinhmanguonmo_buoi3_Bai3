<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đổi màu nền</title>
</head>
<body>

<h2>Bài 1: Đổi màu nền</h2>

<button onclick="changeBg()">Đổi màu nền</button>

<script>
function changeBg() {
    document.body.style.backgroundColor =
        "#" + Math.floor(Math.random() * 16777215).toString(16);
}
</script>

</body>
</html>