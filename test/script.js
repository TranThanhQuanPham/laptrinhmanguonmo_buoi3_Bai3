document
    .getElementById("registerForm")
    .addEventListener("submit", function (e){
        e.preventDefault();
        let fullname = document.getElementById("fullname").value.trim();
        let email = document.getElementById("email").value.trim();
        let password =document.getElementById("password").value.trim();
        if(fullname ==""){
            alert("chưa nhập họ tên ");
            return;

        }
        if(email==""){
            alert("chưa nhập email");
            return;
        }
        if(password.len)

    })