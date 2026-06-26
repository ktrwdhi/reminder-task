<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Lilita+One&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <title>TO-DO APP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: lilita one;
        }

        :root{
             --primary-color: rgb(226, 145, 22);
            --secondary-color: rgb(255, 255, 0);
            --third-color: rgb(181, 184, 2);
            --forth-color: rgb(255, 255, 255);
        }
        
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            gap: 20px;
            overflow-x: hidden;
        }

        .input{
            display: flex;
            flex-direction: column;
            align-items:flex-start;
            justify-content: flex-start;
            gap: 10px;
            background-color: var(--primary-color);
            width: 500px;
            border-radius: 50px 0px 50px 0px;
            padding: 30px;
        }

        .input h1{
            padding: 25px;
            color: var(--secondary-color);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .input-text{
            display: flex;
            flex-direction: column;
            width: 100%;
            color: var(--secondary-color);
        }

        .input-text input{
            padding: 15px;
            border-radius: 10px;
            border: none;
            outline: none;
        }

        

        .input-text button{
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 20px;
            outline: none;
            background-color: var(--secondary-color);
            color: var(--primary-color);
            font-weight: bold;
            cursor: pointer;
            border: none;
            margin-top: 10px;
        }

        .input-text button:hover {
            background-color: var(--third-color);
            transform: scale(1.03);
        }

        .input-text button:active {
            transform: scale(0.97);
        }
        .input-text label {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .options{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
        }

        .remember{
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--secondary-color);
            font-size: 14px;
        }

        .remember input{
            cursor: pointer;
        }

        .forgot-password{
            text-decoration: none;
            color: var(--secondary-color);
            font-size: 14px;
            transition: 0.3s;
        }

        .forgot-password:hover{
            color: white;
            text-decoration: underline;
        }
        @media(max-width:600px){
            .input{
                background: none;
                justify-content: center;
                align-items: center;
                width: 90%;
            }
            .input h1{
                font-size: 50px;
            }
            .input-text input{
                border-bottom: 2px solid var(--primary-color);
                border-radius: 0px;
            }
            .input-text label{
                display: none;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('login.store') }}" method="post">
        <div class="input" id="input">
            <h1>LOG IN</h1> 

            @csrf
            <div class="input-text">
                <label for="nama">NIM :</label>
                <input type="number" id="nim" name="nim" placeholder="Masukkan nim anda">
            </div>

            <div class="input-text">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password anda">
            </div>

            <div class="options">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>

            <div class="input-text">
                <button type="submit" id="submit">Submit</button>
            </div>
        </div>
    </form> 

</body>
</html>