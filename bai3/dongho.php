<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đồng hồ</title>
</head>
<body>

<h2>Bài 3: Đồng hồ</h2>

<h1 id="clock"></h1>

<script>

function updateClock(){

    let now = new Date();

    document.getElementById("clock").innerText =
    now.toLocaleTimeString();

    
}

setInterval(updateClock,1000);

updateClock();

</script>

</body>
</html>