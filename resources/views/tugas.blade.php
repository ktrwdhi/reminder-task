<style>
.task{
    display: flex;
    flex-direction: column;
    padding: 30px;
    gap: 30px;
    background-color: var(--forth-color);
    border-radius: 25px;
}
.task-list{
    list-style: none;
}
.task-list li{
    display: flex;
    justify-content: space-between;
    padding: 15px;
    border-bottom: 1px solid;
    cursor: pointer;
}
.status{
    display: flex;
    background-color: green;
    align-items: center;
    padding: 10px;
    border-radius: 20px;
    color: var(--forth-color);
    font-family: Arial;
    font-size: 15px;
}
.task-list li:hover{
    background-color: #e0e0e0;
}
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideOut {
    from {
        opacity: 1;
        transform: translateY(0);
    }
    to {
        opacity: 0;
        transform: translateY(-50px);
    }
}
@keyframes fadeOut{
    from{ opacity: 1;}
    to{ opacity: 0;}
}
.pop-up{
    background-color: var(--forth-color);
    padding: 20px;
    display: none;
    flex-direction: column;
    gap: 20px;
    border-radius: 25px;
    width: 40%;
    position: fixed;
    left: 30%;
    z-index: 2;
}
.pop-up-header{
    display: flex;
    gap: 20px;
}
.pop-up-header button{
    border: none;
    background-color: var(--primary-color);
    color: var(--forth-color);
    padding: 10px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
}
.task-detail{
    padding: 15px;
    display: flex;
    flex-direction: column;
    gap: 25px;
}
.detail{
    background-color: rgb(248, 231, 198);
    color: #161616;
    font-family: Arial, Helvetica, sans-serif;
    padding: 20px;
    border-radius: 30px;
}
.task-detail button{
    width: 100%;
    padding: 10px;
    border: none;
    background-color: rgb(8, 204, 8);
    color: var(--forth-color);
    font-family: lilita one;
    font-size: 20px;
    border-radius: 20px;
    cursor: pointer;
}
.overlay{
    background-color: rgba(0, 0, 0, 0.5);
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: none;
}
@media (max-width:800px) {
    .task-name, .status{
        transform: scale(0.9);
    }
    .status{
        font-size: 10px;
    }
    .pop-up{
        width: 90%;
        left: 5%;
    }
}
</style>
@extends('template.template')
@section('content')    
    <div class="task">
        <h2>DAFTAR TUGAS</h2>
        <ul class="task-list"></ul>
    </div>
    <div class="pop-up"></div>
    <div class="overlay"></div>
    <script>
        const taskList = document.querySelector(".task-list");
        const popUp = document.querySelector(".pop-up");
        const overlay = document.querySelector(".overlay");

        fetch("asset/tugas.json").then(response => response.json()).then(data => data.forEach(
            task => {
                const li = document.createElement("li");

                li.innerHTML = 
                `<div class="task-name">
                    <h3>${task.nama_tugas}</h3>
                    <p>Deadline : ${task.deadline}</p>
                </div>
                <h4 class="status">${task.status}</h4>`;

                const status = li.querySelector(".status");

                if(task.status == "selesai"){
                    status.style.backgroundColor = "green";
                }else{                    
                    status.style.backgroundColor = "red";
                }

                li.addEventListener("click",() => {
                    popUp.style.display = "flex";
                    overlay.style.display = "block";
                    popUp.style.animation = "slideDown 0.3s ease-out";
                    
                    popUp.innerHTML = `
                    <div class="pop-up-header">
                        <button onclick="hidePopUp()"><i class="fa-solid fa-arrow-left"></i></button>
                        <h1>${task.mata_pelajaran}</h1>
                    </div>
                    <div class="task-detail">
                        <h1>${task.nama_tugas}</h1>
                        <div class="detail">
                            <p class="deadline">Deadline : ${task.deadline}</p>
                            <p class="deskripsi">${task.tugas}</p>
                        </div>
                        <button class="selesai">Tandai Selesai</button>
                    </div>`;
                        
                    const buttonSelesai = document.querySelector(".selesai");

                    if(task.status == "selesai"){
                        buttonSelesai.disabled = true;
                        buttonSelesai.style.backgroundColor = "grey";
                    }
                });
                taskList.appendChild(li);
            }
        ))
        
        function hidePopUp(){
            popUp.style.animation = "slideOut 0.3s ease-out";
            overlay.style.animation = "fadeOut 0.3s ease-out";
            setTimeout(() => {
                popUp.style.display = "none";
                overlay.style.display = "none";
                
                popUp.style.animation = "";
                overlay.style.animation = "";
            }, 300);
        }
    </script>
@endsection