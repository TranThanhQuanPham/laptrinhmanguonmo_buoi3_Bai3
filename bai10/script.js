let tasks = [];

// Đọc dữ liệu khi mở trang
loadTasks();

function loadTasks(){

    fetch("api.php?action=read")
    .then(res=>res.json())
    .then(data=>{

        tasks=data;

        render();

    });

}

function render(){

    let html="";

    tasks.forEach((task,index)=>{

        html+=`
        <li>

            <span class="${task.done?'done':''}"
                onclick="toggleTask(${index})">

                ${task.name}

            </span>

            <button onclick="deleteTask(${index})">
            Xóa
            </button>

        </li>
        `;

    });

    document.getElementById("taskList").innerHTML=html;

}

function addTask(){

    let input=document.getElementById("taskInput");

    if(input.value=="") return;

    tasks.push({

        name:input.value,
        done:false

    });

    save();

    input.value="";

}

function deleteTask(index){

    tasks.splice(index,1);

    save();

}

function toggleTask(index){

    tasks[index].done=!tasks[index].done;

    save();

}

function save(){

    fetch("api.php",{

        method:"POST",

        headers:{
            "Content-Type":"application/json"
        },

        body:JSON.stringify(tasks)

    })

    .then(res=>res.text())
    .then(()=>{

        render();

    });

}