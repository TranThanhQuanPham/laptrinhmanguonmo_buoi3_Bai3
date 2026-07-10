<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Biến JavaScript</title>
</head>

<body>

    <div id="info"></div>

    <script>
        let name = "An";
        let age = 20;

        console.log(name);
        console.log(age);

        document.getElementById("info").innerHTML =
            `Tên: ${name} <br> Tuổi: ${age}`;
    </script>

</body>

</html>