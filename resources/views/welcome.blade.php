
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademi | Futbol Okulu Yönetimi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --green: #18794e;
            --green-dark: #105c3a;
            --green-light: #eaf5ee;
            --bg: #f6f8f6;
            --white: #ffffff;
            --text: #202a24;
            --muted: #7c8880;
            --border: #e7ece8;
            --orange: #e9a23b;
            --shadow: 0 8px 30px rgba(26, 60, 40, .045);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
        }

        button, input { font: inherit; }
        button { cursor: pointer; }

        .app { min-height: 100vh; }

        .topbar {
            height: 76px;
            background: var(--white);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6%;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            border-radius: 13px;
            background: var(--green);
            display: grid;
            place-items: center;
            color: white;
            font-size: 23px;
        }

        .brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -.6px;
        }

        .brand-sub {
            font-size: 11px;
            color: var(--muted);
            margin-top: 2px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .today {
            color: var(--muted);
            font-size: 12px;
        }

        .avatar {
            width: 39px;
            height: 39px;
            display: grid;
            place-items: center;
            background: #e4f0e7;
            color: var(--green-dark);
            border-radius: 50%;
            font-weight: 800;
        }

        main {
            max-width: 1220px;
            margin: 0 auto;
            padding: 42px 28px 60px;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--green);
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1.5px;
            font-size: 10px;
            margin-bottom: 13px;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            background: #42a66e;
            border-radius: 50%;
        }

        h1, h2, h3, p { margin-top: 0; }

        h1 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(28px, 4vw, 38px);
            line-height: 1.2;
            letter-spacing: -1.6px;
            margin-bottom: 12px;
        }

        .intro {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
            max-width: 590px;
            margin-bottom: 0;
        }

        .welcome-banner {
            position: relative;
            overflow: hidden;
            background: #153f2c;
            color: white;
            border-radius: 22px;
            padding: 34px 38px;
            margin-bottom: 38px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
        }

        .welcome-banner::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            right: 35px;
            top: -170px;
            box-shadow: 0 0 0 35px rgba(255,255,255,.025),
                        0 0 0 70px rgba(255,255,255,.025);
        }

        .banner-copy { position: relative; z-index: 1; }

        .banner-copy .eyebrow { color: #a9dfbd; }

        .banner-copy h2 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(22px, 3vw, 30px);
            letter-spacing: -.8px;
            margin-bottom: 10px;
        }

        .banner-copy p {
            color: #c4d9cb;
            margin-bottom: 0;
            line-height: 1.7;
        }

        .banner-ball {
            position: relative;
            z-index: 1;
            font-size: 74px;
            opacity: .95;
            padding: 0 18px;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 22px;
        }

        .section-heading h2 {
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            letter-spacing: -.6px;
            margin-bottom: 7px;
        }

        .section-heading p {
            color: var(--muted);
            margin-bottom: 0;
            font-size: 13px;
        }

        .search {
            width: 250px;
            max-width: 100%;
            position: relative;
        }

        .search input {
            width: 100%;
            padding: 12px 14px 12px 39px;
            border: 1px solid var(--border);
            border-radius: 11px;
            background: white;
            outline: none;
            color: var(--text);
        }

        .search input:focus {
            border-color: #8bbda0;
            box-shadow: 0 0 0 3px rgba(24,121,78,.08);
        }

        .search-icon {
            position: absolute;
            left: 13px;
            top: 10px;
            color: var(--muted);
            font-size: 17px;
        }

        .group-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .group-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 17px;
            padding: 23px;
            text-align: left;
            color: var(--text);
            box-shadow: var(--shadow);
            transition: transform .2s, border-color .2s, box-shadow .2s;
            width: 100%;
        }

        .group-card:hover {
            transform: translateY(-4px);
            border-color: #a5cfb4;
            box-shadow: 0 13px 34px rgba(26,60,40,.09);
        }

        .group-card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .group-symbol {
            height: 48px;
            width: 48px;
            border-radius: 14px;
            background: var(--green-light);
            display: grid;
            place-items: center;
            font-size: 24px;
        }

        .group-arrow {
            color: #91a097;
            font-size: 22px;
            transition: transform .2s;
        }

        .group-card:hover .group-arrow { transform: translateX(4px); }

        .group-card h3 {
            font-family: 'Manrope', sans-serif;
            font-size: 18px;
            letter-spacing: -.4px;
            margin-bottom: 7px;
        }

        .group-age {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 22px;
        }

        .group-divider {
            border-top: 1px solid var(--border);
            margin-bottom: 17px;
        }

        .group-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .player-count {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #536159;
            font-size: 12px;
        }

        .mini-people { font-size: 16px; }

        .status {
            color: var(--green);
            background: var(--green-light);
            padding: 6px 9px;
            border-radius: 7px;
            font-size: 10px;
            font-weight: 800;
        }

        .add-card {
            border: 1px dashed #b8c9bd;
            background: rgba(255,255,255,.5);
            box-shadow: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 224px;
            text-align: center;
            color: #526c5a;
        }

        .add-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #e9f3ec;
            display: grid;
            place-items: center;
            font-size: 26px;
            margin-bottom: 15px;
        }

        .add-card strong { font-size: 14px; margin-bottom: 7px; }
        .add-card small { color: var(--muted); font-size: 11px; }

        .footnote {
            color: #9aa49d;
            font-size: 11px;
            margin-top: 22px;
        }

        .empty-state {
            display: none;
            padding: 35px;
            text-align: center;
            color: var(--muted);
            border: 1px dashed var(--border);
            border-radius: 15px;
            background: white;
        }

        /* Group workspace */

        .workspace { display: none; }

        .back-button {
            border: 0;
            background: transparent;
            color: var(--muted);
            padding: 8px 0;
            margin-bottom: 23px;
            font-weight: 700;
        }

        .back-button:hover { color: var(--green); }

        .workspace-header {
            background: white;
            border: 1px solid var(--border);
            border-radius: 19px;
            padding: 27px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .workspace-title {
            display: flex;
            align-items: center;
            gap: 17px;
        }

        .workspace-title .group-symbol {
            width: 59px;
            height: 59px;
            font-size: 28px;
        }

        .workspace-title h1 {
            font-size: 26px;
            margin-bottom: 7px;
        }

        .workspace-title p {
            color: var(--muted);
            margin-bottom: 0;
        }

        .outline-button, .primary-button {
            padding: 11px 16px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 12px;
        }

        .outline-button {
            background: white;
            border: 1px solid var(--border);
            color: var(--text);
        }

        .primary-button {
            background: var(--green);
            border: 1px solid var(--green);
            color: white;
        }

        .primary-button:hover { background: var(--green-dark); }

        .module-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
            margin-bottom: 27px;
        }

        .module-card {
            text-align: left;
            border: 1px solid var(--border);
            background: white;
            padding: 23px;
            border-radius: 16px;
            transition: .2s;
            color: var(--text);
        }

        .module-card:hover {
            border-color: #a5cfb4;
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .module-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: var(--green-light);
            font-size: 21px;
            margin-bottom: 17px;
        }

        .module-card h3 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .module-card p {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .module-link {
            color: var(--green);
            font-size: 12px;
            font-weight: 800;
        }

        .content-panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 17px;
            padding: 25px;
        }

        .content-panel h2 {
            font-family: 'Manrope', sans-serif;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .content-panel > p {
            color: var(--muted);
            line-height: 1.7;
            font-size: 13px;
        }

        .quick-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 15px 0;
            border-top: 1px solid var(--border);
        }

        .quick-row strong { display: block; margin-bottom: 5px; }
        .quick-row small { color: var(--muted); }

        .module-view { display: none; }

        .notice {
            padding: 15px;
            background: #f2f7f3;
            color: #43634e;
            border-radius: 11px;
            line-height: 1.7;
            font-size: 12px;
        }

        .footer {
            text-align: center;
            color: #9aa49d;
            font-size: 11px;
            padding-top: 40px;
        }

        @media (max-width: 900px) {
            .group-grid, .module-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .topbar { padding: 0 24px; }
            main { padding: 30px 22px 45px; }
        }

        @media (max-width: 600px) {
            .topbar { height: 68px; padding: 0 17px; }
            .today { display: none; }
            main { padding: 25px 15px 35px; }
            .welcome-banner { padding: 25px 22px; border-radius: 17px; }
            .banner-ball { font-size: 48px; padding: 0; }
            .section-heading { align-items: stretch; flex-direction: column; }
            .search { width: 100%; }
            .group-grid, .module-grid { grid-template-columns: 1fr; }
            .group-card { padding: 20px; }
            .workspace-header { align-items: flex-start; flex-direction: column; padding: 21px; }
            .workspace-title h1 { font-size: 21px; }
            .workspace-title .group-symbol { width: 49px; height: 49px; }
            .content-panel { padding: 19px; }
        }
    </style>
</head>
<body>
<div class="app">

    <header class="topbar">
        <div class="brand" onclick="showGroups()">
            <div class="brand-icon">⚽</div>
            <div>
                <div class="brand-name">Akademi</div>
                <div class="brand-sub">Futbol Okulu Yönetimi</div>
            </div>
        </div>

        <div class="topbar-right">
            <span class="today" id="today"></span>
            <div class="avatar">Y</div>
        </div>
    </header>

    <main>
        <!-- GROUP SELECTION -->
        <section id="groupsPage">
            <div class="welcome-banner">
                <div class="banner-copy">
                    <div class="eyebrow"><span class="eyebrow-dot"></span> YÖNETİM PANELİ</div>
                    <h2>Her takımın bir hikâyesi var.</h2>
                    <p>Devam etmek için yönetmek istediğin grubu seç.</p>
                </div>
                <div class="banner-ball">⚽</div>
            </div>

            <div class="section-heading">
                <div>
                    <h2>Grupların</h2>
                    <p>Bir grup seçerek oyunculara ve takım işlemlerine ulaş.</p>
                </div>

                <div class="search">
                    <span class="search-icon">⌕</span>
                    <input type="text" id="groupSearch" placeholder="Grup ara..." oninput="filterGroups()">
                </div>
            </div>

           
<div class="group-grid" id="groupGrid">
    @forelse ($groups as $group)
        <button
            class="group-card"
            data-name="{{ strtolower($group->name) }}"
            onclick="openGroup(
                {{ Js::from($group->name) }},
                {{ Js::from($group->birth_year ? 'U' . (date('Y') - $group->birth_year) : 'Grup') }},
                {{ $group->players_count }}
            )"
        >
            <div class="group-card-top">
                <div class="group-symbol">⚽</div>
                <span class="group-arrow">↗</span>
            </div>

            <h3>{{ $group->name }}</h3>

            <div class="group-age">
                {{ $group->birth_year ? $group->birth_year . ' doğumlular' : ($group->description ?: 'Futbol Grubu') }}
            </div>

            <div class="group-divider"></div>

            <div class="group-bottom">
                <div class="player-count">
                    <span class="mini-people">♙</span>
                    {{ $group->players_count }} oyuncu
                </div>
                <span class="status">AKTİF</span>
            </div>
        </button>
    @empty
        <div class="notice">
            Henüz bir grup oluşturulmamış. İlk grubunu eklediğinde burada görünecek.
        </div>
    @endforelse
 
<button class="group-card add-card" onclick="showGroupForm()">
    <span class="add-icon">+</span>
    <strong>Yeni grup oluştur</strong>
    <small>Akademine yeni bir grup ekle</small>
</button>

</div>

            <div class="empty-state" id="emptyState">
                Bu aramayla eşleşen bir grup bulunamadı.
            </div>

            <div class="footnote">
                Gösterilen gruplar ve oyuncu sayıları örnek amaçlıdır.
            </div>
        </section>

        <!-- SELECTED GROUP WORKSPACE -->
        <section id="workspace" class="workspace">
            <button class="back-button" onclick="showGroups()">← Tüm gruplara dön</button>

            <div class="workspace-header">
                <div class="workspace-title">
                    <div class="group-symbol">⚽</div>
                    <div>
                        <div class="eyebrow"><span class="eyebrow-dot"></span> GRUP YÖNETİMİ</div>
                        <h1 id="selectedGroupName">2014 Doğumlular</h1>
                        <p><span id="selectedGroupAge">U12</span> · <span id="selectedPlayerCount">18</span> oyuncu</p>
                    </div>
                </div>
                <button class="outline-button" onclick="showGroups()">Grup değiştir ↗</button>
            </div>

            <div id="moduleGrid" class="module-grid">
                <button class="module-card" onclick="openModule('players')">
                    <div class="module-icon">♙</div>
                    <h3>Oyuncular</h3>
                    <p>Oyuncuları listele, yeni kayıt oluştur ve oyuncu bilgilerini yönet.</p>
                    <span class="module-link">Oyunculara git →</span>
                </button>

                <button class="module-card" onclick="openModule('attendance')">
                    <div class="module-icon">✓</div>
                    <h3>Yoklama</h3>
                    <p>Antrenman katılımını takip et ve geçmiş yoklama kayıtlarını incele.</p>
                    <span class="module-link">Yoklama al →</span>
                </button>

                <button class="module-card" onclick="openModule('training')">
                    <div class="module-icon">◷</div>
                    <h3>Antrenmanlar</h3>
                    <p>Antrenman günlerini, saatlerini ve planlarını düzenle.</p>
                    <span class="module-link">Takvimi görüntüle →</span>
                </button>

                <button class="module-card" onclick="openModule('payments')">
                    <div class="module-icon">₺</div>
                    <h3>Ödemeler</h3>
                    <p>Aidatları, tahsilatları ve ödeme bekleyen oyuncuları takip et.</p>
                    <span class="module-link">Ödemeleri yönet →</span>
                </button>

                <button class="module-card" onclick="openModule('reports')">
                    <div class="module-icon">▥</div>
                    <h3>Raporlar</h3>
                    <p>Grubun devam durumunu ve ödeme özetlerini incele.</p>
                    <span class="module-link">Raporları aç →</span>
                </button>

                <button class="module-card" onclick="openModule('settings')">
                    <div class="module-icon">⚙</div>
                    <h3>Grup ayarları</h3>
                    <p>Grup adını, yaş kategorisini ve grup bilgilerini düzenle.</p>
                    <span class="module-link">Ayarları aç →</span>
                </button>
            </div>

            <div id="moduleView" class="module-view content-panel">
                <button class="back-button" onclick="backToModules()">← Grup yönetimine dön</button>
                <h2 id="moduleTitle">Bölüm</h2>
                <p id="moduleDescription"></p>
                <div id="moduleContent"></div>
            </div>

            <div id="groupOverview" class="content-panel">
                <h2>Grup yönetimine hoş geldin</h2>
                <p>Bu grubun günlük işlemlerine buradan ulaşabilirsin.</p>
                <div class="notice">
                    <strong>Başlangıç notu:</strong> Bu ekran şu anda tasarım prototipidir.
                    Oyuncu kayıtları, yoklama ve ödemeler veritabanına bağlandığında burada gerçek bilgiler gösterilecek.
                </div>
            </div>
        </section>

        <footer class="footer">
            Akademi · Futbol Okulu Yönetim Sistemi
        </footer>
    </main>
</div>

<script>
    const todayElement = document.getElementById('today');

    todayElement.textContent = new Intl.DateTimeFormat('tr-TR', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    }).format(new Date());
    
    function showGroupForm() {
    document.getElementById('groupFormModal').style.display = 'flex';
    }
    function showGroups() {
        document.getElementById('groupsPage').style.display = 'block';
        document.getElementById('workspace').style.display = 'none';
        document.getElementById('groupSearch').value = '';
        filterGroups();
    }

    function filterGroups() {
        const query = document.getElementById('groupSearch').value
            .toLocaleLowerCase('tr-TR')
            .trim();

        const cards = document.querySelectorAll('#groupGrid .group-card:not(.add-card)');
        let visibleCount = 0;

        cards.forEach(card => {
            const matches = card.dataset.name.toLocaleLowerCase('tr-TR').includes(query);
            card.style.display = matches ? '' : 'none';
            if (matches) visibleCount++;
        });

        document.querySelector('.add-card').style.display = '';
        document.getElementById('emptyState').style.display =
            visibleCount === 0 ? 'block' : 'none';
    }

    function openGroup(name, age, count) {
        document.getElementById('groupsPage').style.display = 'none';
        document.getElementById('workspace').style.display = 'block';

        document.getElementById('selectedGroupName').textContent = name;
        document.getElementById('selectedGroupAge').textContent = age;
        document.getElementById('selectedPlayerCount').textContent = count;

        backToModules();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    const modules = {
        players: {
            title: 'Oyuncular',
            description: 'Bu gruptaki oyuncuları yönet.',
            content: `
                <div class="quick-row">
                    <div>
                        <strong>Oyuncu listesi</strong>
                        <small>Kayıtlı oyuncuları görüntüleme ve düzenleme</small>
                    </div>
                    <button class="outline-button" onclick="showMessage('Oyuncu listesi veritabanı bağlantısıyla hazırlanacak.')">Listeyi aç</button>
                </div>
                <div class="quick-row">
                    <div>
                        <strong>Yeni oyuncu ekle</strong>
                        <small>Gruba yeni bir oyuncu kaydet</small>
                    </div>
                    <button class="primary-button" onclick="showMessage('Oyuncu ekleme formunu sonraki geliştirme adımında hazırlayacağız.')">+ Oyuncu ekle</button>
                </div>
                <div class="quick-row">
                    <div>
                        <strong>Aktif olmayan oyuncular</strong>
                        <small>Geçmiş kayıtları koruyarak oyuncu durumlarını yönet</small>
                    </div>
                    <button class="outline-button" onclick="showMessage('Oyuncu durum yönetimi sonraki aşamada eklenecek.')">Görüntüle</button>
                </div>`
        },
        attendance: {
            title: 'Yoklama',
            description: 'Grubun antrenman katılımını takip et.',
            content: `
                <div class="notice">Yoklama modülünde antrenman tarihini seçip oyuncuları geldi, gelmedi veya izinli olarak işaretleyebileceğiz.</div>
                <div class="quick-row">
                    <div><strong>Yeni yoklama</strong><small>Bir antrenman için katılım kaydı oluştur</small></div>
                    <button class="primary-button" onclick="showMessage('Yoklama ekranını oyuncu kayıtlarıyla birlikte geliştireceğiz.')">Yoklama al</button>
                </div>
                <div class="quick-row">
                    <div><strong>Yoklama geçmişi</strong><small>Önceki antrenmanların katılım kayıtları</small></div>
                    <button class="outline-button" onclick="showMessage('Yoklama geçmişi veritabanı aşamasında hazırlanacak.')">Geçmişi gör</button>
                </div>`
        },
        training: {
            title: 'Antrenmanlar',
            description: 'Antrenman programını ve geçmiş antrenmanları yönet.',
            content: `
                <div class="quick-row">
                    <div><strong>Antrenman programı</strong><small>Gün, saat ve antrenman bilgileri</small></div>
                    <button class="outline-button" onclick="showMessage('Antrenman takvimi sonraki aşamada hazırlanacak.')">Takvimi aç</button>
                </div>
                <div class="quick-row">
                    <div><strong>Yeni antrenman</strong><small>Grup için yeni bir antrenman planla</small></div>
                    <button class="primary-button" onclick="showMessage('Antrenman oluşturma formunu sonraki adımda geliştireceğiz.')">+ Antrenman ekle</button>
                </div>`
        },
        payments: {
            title: 'Ödemeler',
            description: 'Bu gruptaki aidatları ve tahsilatları takip et.',
            content: `
                <div class="notice">Oyuncuların ödeme geçmişi, bekleyen aidatları ve yapılan tahsilatlar burada yer alacak.</div>
                <div class="quick-row">
                    <div><strong>Ödeme kayıtları</strong><small>Oyuncu bazında tahsilat geçmişi</small></div>
                    <button class="outline-button" onclick="showMessage('Ödeme kayıtları veritabanı bağlantısıyla hazırlanacak.')">Kayıtları aç</button>
                </div>
                <div class="quick-row">
                    <div><strong>Yeni ödeme kaydı</strong><small>Bir oyuncunun yaptığı ödemeyi kaydet</small></div>
                    <button class="primary-button" onclick="showMessage('Ödeme kayıt formunu sonraki aşamada oluşturacağız.')">+ Ödeme ekle</button>
                </div>`
        },
        reports: {
            title: 'Grup raporları',
            description: 'Grubun devam ve ödeme durumunu takip et.',
            content: `
                <div class="quick-row">
                    <div><strong>Yoklama raporu</strong><small>Oyuncuların devam oranları ve katılım geçmişi</small></div>
                    <button class="outline-button" onclick="showMessage('Yoklama raporları gerçek kayıtlar oluştuğunda hazırlanacak.')">Raporu aç</button>
                </div>
                <div class="quick-row">
                    <div><strong>Ödeme raporu</strong><small>Tahsilatlar ve bekleyen ödemeler</small></div>
                    <button class="outline-button" onclick="showMessage('Ödeme raporları ödeme kayıtlarıyla birlikte hazırlanacak.')">Raporu aç</button>
                </div>`
        },
        settings: {
            title: 'Grup ayarları',
            description: 'Grup bilgilerini ve temel ayarları yönet.',
            content: `
                <div class="notice">Grup adı, yaş kategorisi ve aidat tutarı gibi bilgileri bu bölümden düzenleyebileceğiz.</div>
                <div class="quick-row">
                    <div><strong>Grup bilgileri</strong><small>Grup adı ve yaş kategorisi</small></div>
                    <button class="outline-button" onclick="showMessage('Grup düzenleme formu veritabanı bağlantısıyla hazırlanacak.')">Düzenle</button>
                </div>
                <div class="quick-row">
                    <div><strong>Aidat ayarları</strong><small>Grubun aylık aidat tutarı</small></div>
                    <button class="outline-button" onclick="showMessage('Aidat ayarları sonraki aşamada eklenecek.')">Düzenle</button>
                </div>`
        }
    };

    function openModule(key) {
        const module = modules[key];
        if (!module) return;

        document.getElementById('moduleGrid').style.display = 'none';
        document.getElementById('groupOverview').style.display = 'none';

        const view = document.getElementById('moduleView');
        view.style.display = 'block';

        document.getElementById('moduleTitle').textContent = module.title;
        document.getElementById('moduleDescription').textContent = module.description;
        document.getElementById('moduleContent').innerHTML = module.content;

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function backToModules() {
        document.getElementById('moduleGrid').style.display = 'grid';
        document.getElementById('groupOverview').style.display = 'block';
        document.getElementById('moduleView').style.display = 'none';
    }

    function showMessage(message) {
        alert(message);
    }
</script>

<div id="groupFormModal" style="display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(0, 0, 0, 0.6); align-items: center; justify-content: center; padding: 20px;">
    <div style="width: 100%; max-width: 480px; background: #fff; border-radius: 16px; padding: 28px; color: #1f2937;">
        <h2 style="margin: 0 0 8px;">Yeni grup oluştur</h2>
        <p style="margin: 0 0 24px; color: #6b7280;">Akademine yeni bir grup ekle.</p>

        <form action="{{ route('groups.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 16px;">
                <label for="groupName" style="display: block; margin-bottom: 8px;">Grup adı *</label>
                <input id="groupName" type="text" name="name" maxlength="255" required placeholder="Örn. 2014 Doğumlular" style="width: 100%; box-sizing: border-box; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label for="groupBirthYear" style="display: block; margin-bottom: 8px;">Doğum yılı</label>
                <input id="groupBirthYear" type="number" name="birth_year" min="1990" max="{{ date('Y') }}" placeholder="Örn. 2014" style="width: 100%; box-sizing: border-box; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px;">
            </div>

            <div style="margin-bottom: 24px;">
                <label for="groupDescription" style="display: block; margin-bottom: 8px;">Açıklama</label>
                <textarea id="groupDescription" name="description" maxlength="255" rows="3" placeholder="Grup hakkında kısa bir açıklama" style="width: 100%; box-sizing: border-box; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; resize: vertical;"></textarea>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="document.getElementById('groupFormModal').style.display = 'none'" style="padding: 11px 18px; border: 1px solid #d1d5db; border-radius: 8px; background: #fff; cursor: pointer;">Vazgeç</button>
                <button type="submit" style="padding: 11px 18px; border: none; border-radius: 8px; background: #15803d; color: #fff; cursor: pointer;">Grubu kaydet</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
