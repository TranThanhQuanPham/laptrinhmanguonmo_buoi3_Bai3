document
    .getElementById("registerForm")
    .addEventListener("submit", function (e) {

        e.preventDefault();

        let fullname = document.getElementById("fullname").value.trim();

        let email = document.getElementById("email").value.trim();

        let password = document.getElementById("password").value.trim();

        if (fullname == "") {

            alert("Chưa nhập họ tên");

            return;

        }

        if (email == "") {

            alert("Chưa nhập email");

            return;

        }

        if (password.length < 6) {

            alert("Mật khẩu phải từ 6 ký tự");

            return;

        }

        fetch("register.php", {

            method: "POST",

            headers: {

                "Content-Type": "application/x-www-form-urlencoded"

            },

            body:

                "fullname=" + encodeURIComponent(fullname) +
                "&email=" + encodeURIComponent(email) +
                "&password=" + encodeURIComponent(password)

        })

            .then(res => res.text())

            .then(data => {

                document.getElementById("message").innerHTML = data;

            });

    });