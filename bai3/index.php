<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài tập 03 - Event Handling</title>
</head>

<body>

    <h2>Bài 1: Đổi ảnh khi Hover</h2>

    <img
        src="images/img1.jpg"
        width="250"
        onmouseover="this.src='images/img2.jpg'"
        onmouseout="this.src='images/img1.jpg'">

    <hr>

    <h2>Bài 2: Kiểm tra Email</h2>

    <form onsubmit="return validateEmail()">

        <input
            type="text"
            id="email"
            placeholder="Nhập email">

        <button type="submit">

            Kiểm tra

        </button>

    </form>

    <p id="msg"></p>

    <hr>

    <h2>Bài 3: Đồng hồ</h2>

    <h1 id="clock"></h1>

    <script>
        // Bài 2
        function validateEmail() {

            let email =
                document.getElementById("email").value;

            let regex =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (regex.test(email)) {

                document.getElementById("msg").innerText =
                    "Email hợp lệ";

            } else {

                document.getElementById("msg").innerText =
                    "Email không hợp lệ";

            }

            return false;

        }

        // Bài 3
        function updateClock() {

            let now =
                new Date();

            document.getElementById("clock").innerText =
                now.toLocaleTimeString();

        }

        setInterval(updateClock, 1000);

        updateClock();
    </script>

</body>

</html>