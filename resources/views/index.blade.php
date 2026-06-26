<style>
    .greetings{
        background-color: var(--forth-color);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 35px;
        border-radius: 40px;
        border: 2px solid var(--primary-color);
    }
    .greetings h2{
        margin-bottom: 10px;
        font-size: 25px;
    }
    .info{
        display: flex;
        gap: 20px;
        justify-content: start;
        flex-wrap: wrap;
    }
    .cards{
        width: 100%;
        min-width: 150px;
        flex: 1;
        height: 150px;
        background-color: var(--forth-color);
        padding: 20px;
        border-radius: 20px;
        border: 2px solid var(--primary-color);
    }
    .cards h2{
        font-size: 19px;
    }
    .cards p{
        font-size: 45px;
        padding: 5px;
        margin-top:10px;
    }
    .new-task{
        background-color: var(--forth-color);
        border-radius: 20px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 350px;
        gap: 20px;
    }
    .task{
        list-style: none;
        overflow-y: auto;
    }
    .task li{
        padding: 10px;
        font-size: 20px;
    }
    .task-name{
        font-size: 18px;
        font-family: "arial";
        border-bottom: 1px solid;
        padding: 10px;
    }
    .task-name p{
        font-size: 14px;
    }
</style>
</head>
<body>
@extends('template.template')
@section('title')
    <h1>DASHBOARD MAHASISWA</h1>
@endsection
@section('content')
    <div class="greetings">
            <h2>SELAMAT <span id="time"></span>, {{ Session("name") }}!</h2>
            <p>Semoga harimu menyenangkan dan penuh prestasi!</p>
        </div>
        <div class="info">
            <div class="cards">
                <h2>TOTAL TUGAS</h2>
                <p>{{ $totalTugas }}</p>
            </div>
            <div class="cards">
                <h2>TUGAS SELESAI</h2>
                <p>{{ $tugasSelesai }}</p>
            </div>
            <div class="cards">
                <h2>TUGAS BELUM DIKERJAKAN</h2>
                <p>{{ $tugasBelumSelesai }}</p>
            </div>
            <div class="cards">
                <h2>TUGAS TERLEWAT</h2>
                <p>{{ $tugasTerlewat }}</p>
            </div>
        </div>
        <div class="new-task">
            <h2>Tugas Terbaru</h2>
            <ul class="task">
                @foreach ($tasks as $task)    
                    <li>
                        <div class="task-name">
                            <h4>{{ $task->task_name }}</h4>
                            <p>Deadline : {{ $task->deadline }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <script>
    const date = new Date();
    const hours = date.getHours();
    const time = document.getElementById('time');

    function greetings(){
        if(hours >= 3 && hours < 12){
            time.textContent = 'PAGI';
        } else if(hours >= 12 && hours < 15){
            time.textContent = 'SIANG';
        } else if(hours >= 15 && hours < 18){
            time.textContent = 'SORE';
        } else {
            time.textContent = 'MALAM';
        }
    }
    
    greetings();
</script>
@endsection
