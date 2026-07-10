<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hiển thị nội dung</title>
</head>

<body>

    <h2>Bài 2: Hiển thị nội dung</h2>

    <input type="text" id="txt" placeholder="Nhập gì đó">

    <button onclick="showText()">Hiển thị</button>

    <div id="output"></div>

    <script>
        function showText() {
            let text = document.getElementById("txt").value;
            document.getElementById("output").innerText = text;
        }
    </script>

</body>

</html>