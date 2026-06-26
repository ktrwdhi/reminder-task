<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Lilita+One&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root{
            --primary-color: rgb(226, 145, 22);
            --secondary-color: rgb(255, 255, 0);
            --third-color: rgb(181, 184, 2);
            --forth-color: rgb(255, 255, 255);
        }
        body{
            font-family: 'Lilita One', sans-serif;
            background-color: #e2e2e2;
        }
        .header{
            background-color: var(--primary-color);
            color: var(--forth-color);
            display: flex;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            height: 90px;
            z-index: 100;
        }
        .hamburger{
            display: flex;
            align-items: center; /* Diubah agar icon sejajar vertikal */
            margin-left: 40px;
            gap: 15px;
        }
        .hamburger button{
            background: none;
            border: none;
            font-size: 25px;
            cursor: pointer;
            color: var(--forth-color); /* Warna icon disesuaikan */
        }
        .biodata{
            display: flex;
            align-items: center;
            gap: 20px;
            padding:10px;
        }
        .profile-picture{
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--secondary-color);
        }
        .profile-picture img{
            width:60px;
            height:60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .nametag{
            background-color: var(--secondary-color);
            padding: 8px;
            border-radius: 10px;
            color: var(--primary-color);
        }
        .header h1{
            color: var(--secondary-color);
            font-size: 24px;
        }
        
        /* SIDEBAR STYLES */
        .sidebar{
            width: 300px;
            height: calc(100vh - 90px); /* Disesuaikan agar tidak offset di bawah */
            top: 90px;
            background-color: rgb(206, 129, 42);
            position: fixed;
            transition: transform 0.3s ease;
            z-index: 99;
        }

        /* Default PC: sidebar muncul. Kelas .hide akan menyembunyikannya */
        .sidebar.hide{
            transform: translateX(-300px);
        }
        
        .container{
            display: flex;
            padding-top: 90px;
        }
        
        .main-content{
            margin-left: 300px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: calc(100% - 300px);
            transition: all 0.3s ease;
            color: rgb(141, 129, 20);
        }
        
        .main-content.full{
            margin-left: 0;
            width: 100%;
        }
        
        .sidebar ul{
            padding: 20px;
            list-style: none;
        }
        
        /* Perbaikan selector agar form dan li seragam */
        .sidebar li, .sidebar form button {
            width: 100%;
            text-align: left;
            font-family: 'Lilita One', sans-serif;
        }

        .sidebar ul a, .sidebar form button {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-top: 10px;
            font-size: 20px;
            cursor: pointer;
            text-decoration: none;
            color: #e0e0e0;
            border-radius: 15px;
            transition: background 0.2s;
            border: none;
            background: none;
        }
        
        .sidebar ul a:hover, .sidebar form button:hover{
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }
        
        /* Mengatur warna icon saat hover */
        .sidebar ul a:hover i, .sidebar form button:hover i {
            color: var(--primary-color);
        }

        .sidebar i{
            margin-right: 20px;
            font-size: 25px;
            color: #e0e0e0;
            width: 30px; /* Lebar konstan agar text sejajar vertikal */
            text-align: center;
        }

        /* RESPONSIVE (MOBILE) */
        @media (max-width: 800px) {
            .sidebar{
                width: 260px;
                transform: translateX(-260px); /* Sembunyi di kiri saat mobile */
            }

            /* Saat mobile, gunakan class .show untuk memunculkan */
            .sidebar.show{
                transform: translateX(0);
            }

            .sidebar.hide {
                transform: translateX(-260px);
            }

            .main-content{
                margin-left: 0;
                width: 100%;
            }
            
            .hamburger h1{
                display: none;
            }
            .sidebar i, .sidebar span{
                font-size: 18px;
            }
            .header h1{
                font-size: 20px;
            }
           .profile-picture img{
                width:40px ;
                height: 40px;
            }
            .profile-picture{
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="header" id="header">
        <div class="hamburger">
            <button onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></button>
            @yield('title')
        </div>
        <div class="biodata">
            <div class="nametag">
                <p>{{ session("name") }}</p>
            </div>
            <div class="profile-picture">
                <img src="{{ asset('asset/orang.png') }}" alt="Profile">
            </div>
        </div>
    </div>
    <div class="container"> 
        <div class="sidebar" id="sidebar">
            <ul>
                <li>
                    <a href="/"><i class="fa-solid fa-house"></i><span>Beranda</span></a>
                </li>
                <li>
                    <a href="/task"><i class="fa-solid fa-list-check"></i><span>Tugas</span></a>
                </li>
                <li>
                    <a href="/subject"><i class="fa-solid fa-graduation-cap"></i><span>Pelajaran</span></a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main-content");

        function toggleSidebar(){
            if (window.innerWidth > 800) {
                // Mode Desktop: Toggle sembunyikan rontokkan margin main-content
                sidebar.classList.toggle("hide");
                mainContent.classList.toggle("full");
            } else {
                // Mode Mobile: Toggle munculkan slide-in overlay tanpa ganggu main-content
                sidebar.classList.toggle("show");
            }
        }
    </script>
</body>
</html>