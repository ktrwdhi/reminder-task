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
            font-family: lilita one;
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
        }
        .hamburger{
            display: flex;
            justify-content: center;
            margin-left: 40px;
        }
        .hamburger button{
            background: none;
            border: none;
            font-size: 25px;
            cursor: pointer;
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
        .theme-toggle button{
            border: none;
            width:40px;
            height:40px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            font-size: 25px;
            cursor: pointer;
        }
        .theme-toggle i{
            color: var(--primary-color);
        }
        .nametag{
            background-color: var(--secondary-color);
            padding: 8px;
            border-radius: 10px;
            color: var(--primary-color);
        }
        .header h1{
            padding: 25px;
            color: var(--secondary-color);
        }
        .sidebar{
            width: 300px;
            height: 100vh;
            top: 90px;
            background-color: rgb(206, 129, 42);
            position: fixed;
            display: block;
            transition: transform 0.3s ease;
        }

        .sidebar.hide{
            transform: translateX(-100%);
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
            width:100%;
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
        .sidebar li{
            padding: 10px;
            margin-top: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        .sidebar li:hover{
            background-color: var(--secondary-color);
            padding: 10px;
            border-radius: 15px;
            color:var(--primary-color);
        }
        .sidebar i,.sidebar span{
            margin-right: 20px;
            font-size: 25px;
            color: #e0e0e0;
        }
        .sidebar a{
            text-decoration: none;
        }
        @media (max-width:800px) {
            .sidebar{
                width: 200px;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.show{
                transform: translateX(0);
            }

            .sidebar ul{
                padding: 10px;
            }

            .nametag{
                display: none;
            }
            .sidebar i,.sidebar span{
                font-size: 18px;
            }
            .main-content{
                margin: 0;
            }
            .header h1{
                font-size: 20px;
                padding: 30px;
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
            <button onclick="hideSidebar()"><i class="fa-solid fa-bars"></i></button>
            <h1>DASHBOARD SISWA</h1>
        </div>
        <div class="biodata">
            <div class="nametag">
                <p>Katiar Wadhi</p>
            </div>
            <!-- <div class="theme-toggle">
                <button id="toggle-btn"><i class="fa-solid fa-moon"></i></button>     
            </div> -->
            <div class="profile-picture">
                <img src="{{ asset("asset/orang.png") }}">
            </div>
        </div>
    </div>
    <div class="container"> 
        <div class="sidebar" id="sidebar">
            <ul>
                <a href="/"><li><i class="fa-solid fa-house"></i><span>Beranda</span></li></a>
                <a href="/tugas"><li><i class="fa-solid fa-list-check"></i><span>Tugas</span></li></a>
                <a href=""><li><i class="fa-solid fa-graduation-cap"></i></i><span>Pelajaran</span></li></a>
            </ul>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.querySelector(".main-content")

        function hideSidebar(){
            sidebar.classList.toggle("hide");
            sidebar.classList.toggle("show");
            mainContent.classList.toggle("full")
        }
    </script>
</body>
</html>