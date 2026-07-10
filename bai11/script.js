loadRates();

// Cập nhật sau mỗi 10 phút
setInterval(loadRates, 600000);

function loadRates(){

    fetch("api.php")

    .then(response => response.json())

    .then(data => {

        let html = "";

        for(let money in data.rates){

            html += `
            <tr>

                <td>${money}</td>

                <td>${data.rates[money]}</td>

            </tr>
            `;

        }

        document.getElementById("rateTable").innerHTML = html;

        document.getElementById("updateTime").innerHTML =
        "Cập nhật: " + new Date().toLocaleString();

    });

}