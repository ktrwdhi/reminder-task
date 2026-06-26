<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - 404</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f9fafb;
            color: #111827;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container */
        .error-container {
            text-align: center;
            max-width: 450px;
            width: 100%;
        }

        /* Angka 404 & Animasi */
        .error-code {
            font-size: 8rem;
            font-weight: 800;
            color: rgb(226, 145, 22);
            letter-spacing: 0.1em;
            margin-bottom: 10px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Teks Pesan */
        .error-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #c9ae16;
        }

        .error-message {
            font-size: 1rem;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Tombol Aksi */
        .button-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            justify-content: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.2s, border-color 0.2s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: rgb(226, 145, 22);
            color: #ffffff;
            border: 1px solid transparent;
        }

        .btn-primary:hover {
            background-color: rgb(181, 184, 2);
        }

        .btn-secondary {
            background-color: #ffffff;
            color: #4b5563;
            border: 1px solid #d1d5db;
        }

        .btn-secondary:hover {
            background-color: #f9fafb;
            border-color: #9ca3af;
        }

        /* Responsive untuk layar tablet/PC */
        @media (min-width: 480px) {
            .error-code {
                font-size: 9rem;
            }
            .error-title {
                font-size: 2.2rem;
            }
            .button-group {
                flex-direction: row;
            }
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-code">404</div>
        
        <h1 class="error-title">Halaman Tidak Ditemukan</h1>
        <p class="error-message">
            Maaf, halaman yang Anda tuju tidak ada, telah dihapus, atau tautan yang Anda masukkan salah.
        </p>

        <div class="button-group">
            <a href="/" class="btn btn-primary">Kembali ke Beranda</a>
            <a href="/kontak" class="btn btn-secondary">Laporkan Masalah</a>
        </div>
    </div>

</body>
</html>