<?php $menu = $menu ?? []; ?>

<!-- HERO -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Abigail Bakery</h1>
        <p class="tagline">Freshly Baked with Love</p>
        <p>Nikmati kelezatan roti, cake, dan pastry artisan terbaik kami</p>
        <div class="hero-btn">
            <a href="#menu" class="btn-primary">Lihat Menu</a>
            <a href="#booking" class="btn-secondary">Pesan Sekarang</a>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="about">
    <h2>Our Story</h2>
    <p>
        Abigail Bakery hadir dengan semangat menghadirkan cita rasa terbaik dalam setiap gigitan.
        Kami menggunakan bahan-bahan pilihan berkualitas tinggi, dipanggang segar setiap hari oleh
        para baker berpengalaman kami. Dari roti hangat, cake elegan, hingga pastry yang renyah —
        semuanya dibuat dengan penuh cinta untuk kamu.
    </p>
</section>

<!-- MENU -->
<section class="menu" id="menu">
    <h2>Our Menu</h2>
    <p class="menu-subtitle">Temukan pilihan favoritmu</p>

    <!-- Category Filter -->
    <div class="category-tabs">
        <button class="tab-btn active" onclick="filterMenu('all', this)">All</button>
        <button class="tab-btn" onclick="filterMenu('bread', this)">🍞 Bread</button>
        <button class="tab-btn" onclick="filterMenu('cake', this)">🎂 Cake</button>
        <button class="tab-btn" onclick="filterMenu('pastry', this)">🥐 Pastry</button>
    </div>

    <div class="grid">
        <?php foreach($menu as $m): ?>
        <div class="card" data-kategori="<?= $m['kategori']; ?>">
            <div class="card-img">
                <img src="assets/images/<?= $m['gambar']; ?>" alt="<?= $m['nama']; ?>">
            </div>
            <div class="card-body">
                <span class="card-badge"><?= ucfirst($m['kategori']); ?></span>
                <h3><?= $m['nama']; ?></h3>
                <p><?= $m['harga']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- RESERVASI / ORDER -->
<section class="booking" id="booking">
    <div class="booking-container">
        <div class="booking-text">
            <h2>Pre-Order & Pick Up</h2>
            <p>Pesan terlebih dahulu dan ambil roti segar kesukaanmu langsung di toko kami. Dijamin hangat!</p>
        </div>
        <form class="booking-form">
            <input type="text" placeholder="Nama Lengkap" required>
            <input type="email" placeholder="Email" required>
            <input type="tel" placeholder="Nomor WhatsApp" required>
            <input type="date" required>
            <input type="time" required>
            <select>
                <option value="" disabled selected>Pilih Kategori Menu</option>
                <option value="bread">Bread</option>
                <option value="cake">Cake</option>
                <option value="pastry">Pastry</option>
            </select>
            <input type="text" placeholder="Detail Pesanan (misal: Garlic Bread x2)" required>
            <button type="submit">Order Now</button>
        </form>
    </div>
</section>

<!-- JAVASCRIPT FILTER -->
<script>
    function filterMenu(kategori, btn) {
        // Update active tab button
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Show/hide cards
        document.querySelectorAll('.card').forEach(card => {
            if (kategori === 'all' || card.dataset.kategori === kategori) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
</script>