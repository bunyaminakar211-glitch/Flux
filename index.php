<?php
// index.php - Termux Araçları Sitesi Ana Sayfa
$site_title = "Termux Hack Araçları - Eğitim Amaçlı";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #0d1117; color: #c9d1d9; font-family: 'Segoe UI', sans-serif; }
        .warning { background: #ff4444; color: white; padding: 20px; border-radius: 8px; margin: 20px 0; font-weight: bold; }
        .card { background: #161b22; border: 1px solid #30363d; }
    </style>
</head>
<body class="container mt-5">

    <h1 class="text-center mb-4 text-primary"><?php echo $site_title; ?></h1>

    <div class="warning text-center">
        ⚠️ ÖNEMLİ UYARI ⚠️<br>
        Bu site **sadece eğitim ve etik hacking** amaçlıdır.<br>
        Araçları **izinsiz sistemlerde, başkalarının cihazlarında veya yasa dışı amaçla** kullanmak yasaktır!<br>
        Tüm sorumluluk kullanıcıya aittir. Kendi lab ortamında (test cihazı, kendi ağı) kullanın.<br>
        Yasalara uyun – Türkiye BTK ve 5237 sayılı TCK'ya göre suçtur.
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card text-center p-4">
                <h3>OSINT & Recon</h3>
                <p>Sherlock, Mr.Holmes, Amass gibi araçlar</p>
                <a href="osint.php" class="btn btn-primary">İncele</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4">
                <h3>Ağ Tarama</h3>
                <p>Nmap, Naabu kurulumları</p>
                <a href="network.php" class="btn btn-primary">İncele</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4">
                <h3>Kurulum Rehberi</h3>
                <p>Termux temel + araç kurulum komutları</p>
                <a href="kurulum.php" class="btn btn-primary">Başla</a>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5 py-4">
        <p>&copy; <?php echo date("Y"); ?> Termux Eğitim Sitesi | Etik Hacking Öğreniyoruz</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
