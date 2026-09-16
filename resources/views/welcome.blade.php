<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Praktikum</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="app-header">
        <div class="header-container">
            <div class="brand">
                <div class="brand-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path>
                        <path d="M6 6h10"></path>
                        <path d="M6 10h10"></path>
                    </svg>
                </div>
                <h1>Sistem Pendaftaran Praktikum</h1>
            </div>
            <div class="header-info">
                <span id="jam" class="badge-time">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span>--:--:--</span>
                </span>
                <span id="browser-info" class="badge-browser">Browser Info</span>
            </div>
        </div>
    </header>

    <main class="main-content">
        <div class="card-wrapper">
            <form id="form-daftar" class="modern-card">
                <div class="card-header">
                    <div class="badge-subtitle">Portal Akademik</div>
                    <h2>Formulir Pendaftaran</h2>
                    <p class="subtitle">Lengkapi data diri dan pilih mata kuliah praktikum semester ini.</p>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap <span class="req">*</span></label>
                        <div class="input-wrapper">
                            <input type="text" id="nama" name="nama" placeholder="Contoh: Farhan Al Ghifari">
                        </div>
                        <span class="error-msg" id="nama-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="nim">Nomor Induk Mahasiswa (NIM) <span class="req">*</span></label>
                        <div class="input-wrapper">
                            <input type="text" id="nim" name="nim" placeholder="Contoh: 2110511001">
                        </div>
                        <span class="error-msg" id="nim-error"></span>
                    </div>

                    <div class="form-row-2">
                        <div class="form-group">
                            <label for="fakultas">Fakultas <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="fakultas" name="fakultas">
                                    <option value="">-- Pilih Fakultas --</option>
                                </select>
                            </div>
                            <span class="error-msg" id="fakultas-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="prodi">Program Studi <span class="req">*</span></label>
                            <div class="select-wrapper">
                                <select id="prodi" name="prodi" disabled>
                                    <option value="">-- Pilih Program Studi --</option>
                                </select>
                            </div>
                            <span class="error-msg" id="prodi-error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mk">Mata Kuliah Praktikum <span class="req">*</span></label>
                        <div class="mk-row">
                            <div class="select-wrapper grow">
                                <select id="mk" name="mk">
                                    <option value="">-- Pilih Mata Kuliah --</option>
                                </select>
                            </div>
                            <button type="button" id="btn-tambah-mk" class="btn-secondary">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>Tambah</span>
                            </button>
                        </div>
                        <ul id="daftar-mk" class="daftar-mk"></ul>
                        <div class="mk-meta">
                            <span class="mk-count">Jumlah dipilih: <strong id="jumlah-mk">0</strong> mata kuliah</span>
                        </div>
                        <span class="error-msg" id="mk-error"></span>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn-primary">
                        <span>Daftar Sekarang</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </form>

            <div id="ringkasan" class="modern-card ringkasan" style="display: none;">
                <div class="card-header success-header">
                    <div class="success-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h2>Ringkasan Pendaftaran</h2>
                    <p class="subtitle">Data formulir pendaftaran praktikum berhasil dicatat.</p>
                </div>

                <div class="summary-details">
                    <div class="ringkasan-item">
                        <span class="ringkasan-label">Nama Lengkap</span>
                        <span id="ring-nama" class="ringkasan-value">-</span>
                    </div>
                    <div class="ringkasan-item">
                        <span class="ringkasan-label">NIM</span>
                        <span id="ring-nim" class="ringkasan-value">-</span>
                    </div>
                    <div class="ringkasan-item">
                        <span class="ringkasan-label">Fakultas</span>
                        <span id="ring-fakultas" class="ringkasan-value">-</span>
                    </div>
                    <div class="ringkasan-item">
                        <span class="ringkasan-label">Program Studi</span>
                        <span id="ring-prodi" class="ringkasan-value">-</span>
                    </div>
                    <div class="ringkasan-item list-item">
                        <span class="ringkasan-label">Mata Kuliah Terpilih</span>
                        <ul id="ring-mk" class="ringkasan-mk-list"></ul>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="button" id="btn-daftar-ulang" class="btn-outline">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="1 4 1 10 7 10"></polyline>
                            <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                        </svg>
                        <span>Daftar Ulang / Formulir Baru</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="app-footer">
        <div class="footer-container">
            <p>Sistem Pendaftaran Praktikum &copy; 2026 &bull; Pengembangan Perangkat Komputasi</p>
        </div>
    </footer>
</body>
</html>
