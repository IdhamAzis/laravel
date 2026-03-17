<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 50px;
            animation: slideDown 0.6s ease-out;
        }

        .header h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 0.6s ease-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            color: #667eea;
            font-size: 1.8em;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card h2 i {
            color: #764ba2;
        }

        .info-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-icon {
            color: #667eea;
            font-size: 1.2em;
            min-width: 25px;
            text-align: center;
            margin-top: 3px;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-size: 0.85em;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 3px;
            display: block;
        }

        .info-value {
            font-size: 1.1em;
            color: #333;
            font-weight: 500;
        }

        .navigation {
            text-align: center;
            margin-top: 40px;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .nav-links a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 30px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-links a:hover {
            background: #667eea;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
        }

        .divider {
            display: none;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }

            .content {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-address-card"></i> Contact Information</h1>
        </div>

        <div class="content">
            <!-- Biodata Card -->
            <div class="card">
                <h2><i class="fas fa-user-circle"></i> Biodata</h2>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-id-badge"></i></div>
                    <div class="info-content">
                        <span class="info-label">Nama</span>
                        <div class="info-value">Idham Azis Pangestu</div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-graduation-cap"></i></div>
                    <div class="info-content">
                        <span class="info-label">NPM</span>
                        <div class="info-value">123111011</div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-book"></i></div>
                    <div class="info-content">
                        <span class="info-label">Jurusan</span>
                        <div class="info-value">Teknik Informatika</div>
                    </div>
                </div>
            </div>

            <!-- Contact Card -->
            <div class="card">
                <h2><i class="fas fa-phone-alt"></i> Kontak</h2>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="info-content">
                        <span class="info-label">Nomor Telepon</span>
                        <div class="info-value">08123456789</div>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <div class="info-content">
                        <span class="info-label">Email</span>
                        <div class="info-value">idham@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navigation">
            <div class="nav-links">
                <a href="/profile"><i class="fas fa-user"></i> Profile</a>
                <a href="/gmap"><i class="fas fa-map-location-dot"></i> Gmap</a>
            </div>
        </div>
    </div>
</body>
</html>