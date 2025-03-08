<?php
$name = "Muhammad Azri Qhodroon Alfarizy";
$birthdate = "24 Mei 2006";
$hometown = "Tarakan, Kalimantan Utara";
$study = "Mahasiswa Teknik Informatika di STIMIK PPKIA";
$description = "Mahasiswa Teknik Informatika yang berfokus pada pengembangan perangkat lunak, komputasi awan, dan solusi teknologi inovatif. Berorientasi pada efisiensi dan pengoptimalan sistem.";
$profileImage = "image/gambar.jpg"; // Ganti dengan nama file gambar profil yang sesuai
$socialLinks = [
    "Instagram" => "https://instagram.com/ahsanulfariz",
    "Facebook" => "https://facebook.com/ahsanulfariz",
    "GitHub" => "https://github.com/ahsanulfariz11",
    "WhatsApp" => "https://wa.me/62XXXXXXXXXX" // Ganti dengan nomor WhatsApp
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Profesional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            background-color: #121212;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .card {
            background: #1e1e1e;
            width: 100%;
            max-width: 450px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        .profile-img {
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 5px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        h1 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        p {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .divider {
            width: 50px;
            height: 2px;
            background: #007bff;
            margin: 10px auto;
        }
        .social-links {
            margin-top: 15px;
        }
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin: 5px;
            font-size: 20px;
            color: white;
            background-color: #333;
            border-radius: 50%;
            text-decoration: none;
            transition: 0.3s;
        }
        .social-links a:hover {
            background-color: #007bff;
        }
        .footer {
            font-size: 12px;
            color: #bbb;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="<?php echo $profileImage; ?>" alt="Foto Profil" class="profile-img">
        <h1><?php echo $name; ?></h1>
        <div class="divider"></div>
        <p><strong>Tanggal Lahir:</strong> <?php echo $birthdate; ?></p>
        <p><strong>Asal:</strong> <?php echo $hometown; ?></p>
        <p><strong>Pendidikan:</strong> <?php echo $study; ?></p>
        <p><?php echo $description; ?></p>
        <div class="social-links">
            <?php foreach ($socialLinks as $key => $url): ?>
                <a href="<?php echo $url; ?>" target="_blank" title="<?php echo $key; ?>">
                    <i class="fa-brands fa-<?php echo strtolower($key); ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="footer">&copy; 2025 <?php echo $name; ?></div>
    </div>
</body>
</html>
