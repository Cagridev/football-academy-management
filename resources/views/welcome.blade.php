
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol Okulu Yönetimi</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #172033;
        }

        .sidebar {
            position: fixed;
            width: 240px;
            height: 100vh;
            background: #142b22;
            color: white;
            padding: 28px 20px;
        }

        .brand {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .menu a {
            display: block;
            color: #d2e2d8;
            text-decoration: none;
            padding: 14px 12px;
            margin-bottom: 8px;
            border-radius: 8px;
        }

        .menu a:first-child {
            background: #286749;
            color: white;
        }

        .main {
            margin-left: 240px;
            padding: 35px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .muted {
            color: #718096;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 28px;
        }

        .card, .panel {
            background: white;
            padding: 24px;
            border-radius: 14px;
            box-shadow: 0 3px 12px #142b220b;
        }

        .card p {
            color: #718096;
            margin-top: 0;
        }

        .number {
            font-size: 32px;
            font-weight: bold;
            margin: 10px 0;
        }

        .content {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 20px;
        }

        .panel h2 {
            font-size: 19px;
            margin-top: 0;
        }

        .item {
            padding: 16px 0;
            border-bottom: 1px solid #edf0f2;
        }

        .item:last-child {
            border-bottom: none;
        }

        .tag {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            background: #e2f5e9;
            color: #236441;
            font-size: 12px;
        }

        .button {
            background: #286749;
            color: white;
            padding: 11px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
        }

        @media (max-width: 850px) {
            .sidebar {
                position: static;
                width: 100%;
                height: auto;
            }

            .brand {
                margin-bottom: 15px;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .cards, .content {
                grid-template-columns: 1fr;
            }

            .header {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="brand">⚽ Futbol Okulu</div>
        <nav class="menu">
            <a href="#">Genel Bakış</a>
            <a href="#">Oyuncular</a>
            <a href="#">Gruplar</a>
            <a href="#">Antrenmanlar</a>
            <a href="#">Yoklama</a>
            <a href="#">Ödemeler</a>
            <a href="#">Raporlar</a>
        </nav>
    </aside>

    <main class="main">
        <header class="header">
            <div>
                <h1>Yönetim Paneli</h1>
                <div class="muted">Futbol okulunun genel durumuna hoş geldin.</div>
            </div>
            <a class="button" href="#">+ Oyuncu Ekle</a>
        </header>

        <section class="cards">
            <div class="card">
                <p>Toplam Oyuncu</p>
                <div class="number">0</div>
                <span class="muted">Kayıtlı oyuncu</span>
            </div>
            <div class="card">
                <p>Bugünkü Antrenman</p>
                <div class="number">0</div>
                <span class="muted">Planlanmış antrenman</span>
            </div>
            <div class="card">
                <p>Bekleyen Ödeme</p>
                <div class="number">0 TL</div>
                <span class="muted">Ödeme takibi</span>
            </div>
        </section>

        <section class="content">
            <div class="panel">
                <h2>Bugünkü Antrenmanlar</h2>
                <div class="item">
                    <strong>U12 Grubu</strong>
                    <p class="muted">Henüz antrenman eklenmedi.</p>
                </div>
                <div class="item">
                    <strong>U14 Grubu</strong>
                    <p class="muted">Henüz antrenman eklenmedi.</p>
                </div>
            </div>

            <div class="panel">
                <h2>Hızlı İşlemler</h2>
                <div class="item">Oyuncu kayıtlarını yönet</div>
                <div class="item">Antrenman planlarını görüntüle</div>
                <div class="item">Ödeme durumlarını takip et</div>
            </div>
        </section>
    </main>
</body>
</html>
