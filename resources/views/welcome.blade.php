<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Muharrik Imaduddin - Profil</title>
    <!-- FontAwesome CDN for Premium Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg: #0f172a;
            --surface: #111827;
            --surface-soft: #1f2937;
            --text: #e2e8f0;
            --text-muted: #94a3b8;
            --accent: #38bdf8;
            --accent-soft: rgba(56, 189, 248, 0.18);
            --border: rgba(148, 163, 184, 0.18);
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top, #1e293b 0%, #0f172a 54%);
            color: var(--text);
            min-height: 100vh;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.12), transparent 32%);
            pointer-events: none;
        }
        .page {
            max-width: 1120px;
            margin: 0 auto;
            padding: 32px 24px;
        }
        .card {
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid var(--border);
            border-radius: 28px;
            backdrop-filter: blur(18px);
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.25);
            overflow: hidden;
        }
        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 32px;
            align-items: center;
            padding: 48px;
        }
        .hero h1 {
            margin: 0;
            font-size: clamp(2.6rem, 3.5vw, 4rem);
            line-height: 1.03;
        }
        .hero p {
            margin: 24px 0 0;
            max-width: 680px;
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.8;
        }
        .hero .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 24px;
        }
        .hero .actions {
            margin-top: 32px;
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }
        .button-primary,
        .button-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 24px;
            border-radius: 999px;
            font-weight: 600;
            text-decoration: none;
            transition: transform 160ms ease, background-color 160ms ease, color 160ms ease;
        }
        .button-primary {
            background: linear-gradient(135deg, #22d3ee 0%, #38bdf8 100%);
            color: #0f172a;
        }
        .button-secondary {
            background: rgba(148, 163, 184, 0.14);
            color: var(--text);
            border: 1px solid rgba(148, 163, 184, 0.18);
        }
        .button-primary:hover,
        .button-secondary:hover {
            transform: translateY(-2px);
        }
        .hero-image {
            position: relative;
            min-height: 420px;
            border-radius: 28px;
            overflow: hidden;
            background: linear-gradient(180deg, rgba(56, 189, 248, 0.17), rgba(15, 23, 42, 0.9));
        }
        .hero-image::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url('/images/profile.jpg') center/cover no-repeat;
            opacity: 0.9;
        }
        .hero-image::after {
            content: "Purworejo • Hobi Naik Gunung";
            position: absolute;
            left: 24px;
            bottom: 24px;
            color: #e2e8f0;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            opacity: 0.82;
        }
        .section {
            padding: 40px 48px;
            border-top: 1px solid rgba(148, 163, 184, 0.12);
        }
        .section h2 {
            margin: 0 0 18px;
            font-size: 1.5rem;
        }
        .section p,
        .section li {
            color: var(--text-muted);
            line-height: 1.8;
        }
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }
        .card-small {
            background: var(--surface-soft);
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 24px;
            padding: 24px;
        }
        .card-small h3 {
            margin: 0 0 12px;
            font-size: 1.05rem;
            color: #f8fafc;
        }
        .card-small p {
            margin: 0;
        }
        .skills {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-top: 16px;
        }
        .skill-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            padding: 12px 16px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.12);
            color: #dbeafe;
            font-size: 0.95rem;
            border: 1px solid rgba(56, 189, 248, 0.15);
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 24px;
        }
        .gallery-card {
            border-radius: 24px;
            overflow: hidden;
            background: var(--surface-soft);
            border: 1px solid rgba(148, 163, 184, 0.12);
            box-shadow: inset 0 0 0 1px rgba(148, 163, 184, 0.08);
        }
        .gallery-card img {
            width: 100%;
            display: block;
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }
        .gallery-card .caption {
            padding: 18px 20px;
            color: var(--text-muted);
        }
        .contact-list {
            display: grid;
            gap: 18px;
            margin-top: 18px;
        }
        .contact-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 22px;
            border-radius: 20px;
            background: rgba(148, 163, 184, 0.08);
            border: 1px solid rgba(148, 163, 184, 0.1);
        }
        .contact-label {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .contact-label i {
            color: var(--accent);
            font-size: 1.15rem;
            width: 20px;
            text-align: center;
        }
        .contact-item span {
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        .project-card {
            transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease !important;
        }
        .project-card:hover {
            transform: translateY(-4px);
            border-color: var(--accent) !important;
            box-shadow: 0 12px 24px rgba(56, 189, 248, 0.08);
        }
        .project-card a:hover {
            color: var(--accent) !important;
        }
        .education-card {
            transition: transform 220ms ease, border-color 220ms ease !important;
        }
        .education-card:hover {
            transform: translateY(-2px);
            border-color: var(--accent) !important;
        }
        @media (max-width: 960px) {
            .hero {
                grid-template-columns: 1fr;
            }
            .hero-image {
                min-height: 320px;
            }
            .grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="card hero">
            <div>
                <span class="badge">Profil Personal</span>
                <h1>Hai, saya Muhammad Muharrik Imaduddin</h1>
                <p>Saya lahir di Purworejo pada 25 Juni 2005. Selain berkecimpung di dunia web, saya punya hobi naik gunung dan menjelajah pemandangan alam terutama di Jawa Tengah.</p>
                <div class="actions">
                    <a href="#about" class="button-primary">Tentang Saya</a>
                    <a href="#gallery" class="button-secondary">Galeri Gunung</a>
                </div>
            </div>
            <div class="hero-image"></div>
        </section>

        <section id="about" class="card section">
            <h2>Tentang Muhammad</h2>
            <p>Nama lengkap saya Muhammad Muharrik Imaduddin, lahir di Purworejo pada 25 Juni 2005. Saya menggabungkan kemampuan teknis dan kreativitas desain untuk membuat website yang rapi, modern, dan mudah digunakan.</p>
            <div class="grid-3" style="margin-top: 28px;">
                <div class="card-small">
                    <h3>Tanggal Lahir</h3>
                    <p>25 Juni 2005</p>
                </div>
                <div class="card-small">
                    <h3>Asal</h3>
                    <p>Purworejo, Jawa Tengah</p>
                </div>
                <div class="card-small">
                    <h3>Hobi</h3>
                    <p>Naik gunung, fotografi alam, dan eksplorasi lanskap pegunungan.</p>
                </div>
            </div>
        </section>

        <section class="card section">
            <h2>Keahlian Utama</h2>
            <div class="skills">
                <span class="skill-pill">Laravel</span>
                <span class="skill-pill">Blade</span>
                <span class="skill-pill">PHP</span>
                <span class="skill-pill">HTML & CSS</span>
                <span class="skill-pill">JavaScript</span>
                <span class="skill-pill">Desain Responsif</span>
            </div>
            <div style="margin-top: 24px;">
                <a href="/skills" class="button-primary" style="font-size: 0.95rem; padding: 10px 20px; text-decoration: none;">
                    Lihat Rincian Kompetensi (Dinamis DB) <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </a>
            </div>
        </section>

        <!-- Pendidikan Section -->
        <section class="card section">
            <h2>Riwayat Pendidikan</h2>
            <div class="education-timeline" style="margin-top: 20px; display: grid; gap: 20px;">
                @forelse($educations as $edu)
                    <div class="education-card" style="background: var(--surface-soft); border: 1px solid rgba(148, 163, 184, 0.12); border-radius: 20px; padding: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                        <div>
                            <h3 style="margin: 0 0 6px; font-size: 1.15rem; color: #f8fafc;">{{ $edu->school_name }}</h3>
                            <p style="margin: 0; color: var(--text-muted); font-size: 0.95rem;">{{ $edu->degree }}</p>
                        </div>
                        <span style="font-weight: 700; color: var(--accent); background: var(--accent-soft); padding: 8px 16px; border-radius: 999px; font-size: 0.9rem;">
                            {{ $edu->start_year }} — {{ $edu->end_year ?? 'Sekarang' }}
                        </span>
                    </div>
                @empty
                    <p style="color: var(--text-muted);">Belum ada data pendidikan.</p>
                @endforelse
            </div>
            <div style="margin-top: 24px;">
                <a href="/education" class="button-primary" style="font-size: 0.95rem; padding: 10px 20px; text-decoration: none;">
                    Lihat Rincian Pendidikan <i class="fas fa-graduation-cap" style="margin-left: 6px;"></i>
                </a>
            </div>
        </section>

        <!-- Pengalaman Section -->
        <section class="card section">
            <h2>Pengalaman Kerja & Organisasi</h2>
            <div class="timeline" style="margin-top: 24px; position: relative; padding-left: 32px; border-left: 2px solid var(--border); display: grid; gap: 32px;">
                @forelse($experiences as $exp)
                    <div class="timeline-item" style="position: relative;">
                        <!-- Timeline Dot -->
                        <div style="position: absolute; left: -42px; top: 6px; width: 18px; height: 18px; border-radius: 50%; background: {{ $exp->is_current ? 'linear-gradient(135deg, #22d3ee, #38bdf8)' : 'var(--border)' }}; border: 4px solid var(--bg); box-shadow: 0 0 0 4px {{ $exp->is_current ? 'var(--accent-soft)' : 'transparent' }};"></div>
                        
                        <div class="experience-header" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 8px;">
                            <div>
                                <h3 style="margin: 0 0 4px; font-size: 1.2rem; color: #f8fafc;">{{ $exp->role }}</h3>
                                <div style="color: var(--accent); font-weight: 600; font-size: 0.95rem;">
                                    <i class="fas fa-building" style="margin-right: 6px; font-size: 0.85rem;"></i>{{ $exp->company_name }}
                                </div>
                            </div>
                            <div style="text-align: right; font-size: 0.9rem;">
                                <span style="font-weight: 700; color: var(--text-muted); background: rgba(148, 163, 184, 0.1); padding: 6px 14px; border-radius: 999px;">
                                    {{ $exp->start_date }} — {{ $exp->end_date ?? 'Sekarang' }}
                                </span>
                                <div style="color: var(--text-muted); font-size: 0.8rem; margin-top: 6px;">
                                    <i class="fas fa-map-marker-alt" style="margin-right: 4px;"></i>{{ $exp->location }}
                                </div>
                            </div>
                        </div>
                        <p style="margin: 12px 0 0; color: var(--text-muted); line-height: 1.7; font-size: 0.95rem;">
                            {{ $exp->description }}
                        </p>
                    </div>
                @empty
                    <p style="color: var(--text-muted);">Belum ada data pengalaman.</p>
                @endforelse
            </div>
        </section>

        <!-- Proyek Section -->
        <section class="card section">
            <h2>Proyek Portofolio</h2>
            <p>Beberapa proyek dan aplikasi web yang telah saya selesaikan.</p>
            
            <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px; margin-top: 24px;">
                @forelse($projects as $proj)
                    <div class="project-card" style="background: var(--surface-soft); border: 1px solid rgba(148, 163, 184, 0.12); border-radius: 24px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; padding: 28px;">
                        <div>
                            <!-- Decorative header for projects -->
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
                                <div style="width: 48px; height: 48px; border-radius: 14px; background: var(--accent-soft); color: var(--accent); display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                    @if(str_contains(strtolower($proj->title), 'gunung') || str_contains(strtolower($proj->title), 'simaksi'))
                                        <i class="fas fa-mountain"></i>
                                    @elseif(str_contains(strtolower($proj->title), 'e-commerce') || str_contains(strtolower($proj->title), 'kriya'))
                                        <i class="fas fa-shopping-bag"></i>
                                    @else
                                        <i class="fas fa-laptop-code"></i>
                                    @endif
                                </div>
                                <div style="display: flex; gap: 8px;">
                                    @if($proj->github_url)
                                        <a href="{{ $proj->github_url }}" target="_blank" style="color: var(--text-muted); font-size: 1.2rem; transition: color 150ms;" title="Source Code di GitHub">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    @endif
                                    @if($proj->project_url)
                                        <a href="{{ $proj->project_url }}" target="_blank" style="color: var(--text-muted); font-size: 1.2rem; transition: color 150ms;" title="Lihat Demo Langsung">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            
                            <h3 style="margin: 0 0 10px; font-size: 1.25rem; color: #f8fafc; line-height: 1.4;">{{ $proj->title }}</h3>
                            <p style="margin: 0 0 20px; color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">{{ $proj->description }}</p>
                        </div>
                        
                        <div>
                            <!-- Technology list -->
                            <div style="display: flex; flex-wrap: wrap; gap: 8px; border-top: 1px solid rgba(148, 163, 184, 0.08); padding-top: 16px;">
                                @foreach(explode(',', $proj->technologies) as $tech)
                                    <span style="font-size: 0.8rem; font-weight: 600; color: var(--accent); background: var(--accent-soft); padding: 4px 10px; border-radius: 6px;">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: var(--text-muted);">
                        <p>Belum ada data proyek.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section id="gallery" class="card section">
            <h2>Galeri Pendakian Gunung Jawa Tengah</h2>
            <p>Dokumentasi perjalanan nyata saya dalam menjelajah keindahan lanskap pegunungan Jawa Tengah yang penuh petualangan.</p>
            <div class="gallery">
                <div class="gallery-card">
                    <img src="/images/prau.jpg" alt="Muhammad Muharrik di Gunung Prau">
                    <div class="caption"><strong>Gunung Prau (2565 Mdpl)</strong> — Berfoto bersama rekan pendaki di gerbang ikonik basecamp Patak Banteng.</div>
                </div>
                <div class="gallery-card">
                    <img src="/images/andong.jpg" alt="Muhammad Muharrik di Gunung Andong">
<div class="caption"><strong>Gunung Andong (1726 Mdpl)</strong> — Duduk menikmati jalur pendakian tanah berpasir dengan panorama sabana hijau membentang.</div>
                </div>
                <div class="gallery-card">
                    <img src="/images/sumbing.jpg" alt="Muhammad Muharrik di Puncak Mongkrang">
                    <div class="caption"><strong>Puncak Mongkrang</strong> — Kebersamaan tak terlupakan bersama tim pendaki di puncak dengan ketinggian 2194 Mdpl.</div>
                </div>
            </div>
        </section>

        <section id="contact" class="card section">
            <h2>Kontak</h2>
            <div class="contact-list">
                <div class="contact-item">
                    <div class="contact-label">
                        <i class="fa-solid fa-envelope"></i>
                        <strong>Email</strong>
                    </div>
                    <span>muhammadmuharrikimaduddin@gmail.com</span>
                </div>
                <div class="contact-item">
                    <div class="contact-label">
                        <i class="fa-solid fa-phone"></i>
                        <strong>Telepon</strong>
                    </div>
                    <span>+62 857-1126-7286</span>
                </div>
                <div class="contact-item">
                    <div class="contact-label">
                        <i class="fa-solid fa-location-dot"></i>
                        <strong>Lokasi</strong>
                    </div>
                    <span>Purworejo, Jawa Tengah</span>
                </div>
            </div>
        </section>
    </main>
</body>
</html>