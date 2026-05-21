<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keahlian - Muhammad Muharrik Imaduddin</title>
    <!-- FontAwesome for Premium Icons -->
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
            padding: 48px;
        }
        .header-area {
            text-align: center;
            margin-bottom: 48px;
        }
        .header-area .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.05em;
        }
        .header-area h1 {
            margin: 0;
            font-size: clamp(2.2rem, 3vw, 3.2rem);
            line-height: 1.1;
            font-weight: 800;
        }
        .header-area p {
            margin: 16px 0 0;
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.6;
        }
        .grid-skills {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }
        .skill-card {
            background: var(--surface-soft);
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 24px;
            padding: 32px 24px;
            text-align: center;
            transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }
        .skill-card:hover {
            transform: translateY(-6px);
            border-color: var(--accent);
            box-shadow: 0 15px 30px rgba(56, 189, 248, 0.12);
        }
        .skill-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        .skill-icon.laravel { color: #f9322c; }
        .skill-icon.php { color: #777bb3; }
        .skill-icon.js { color: #f7df1e; }
        .skill-icon.mysql { color: #00758f; }
        .skill-icon.default { color: var(--accent); }

        .skill-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin: 0 0 8px;
            color: #f8fafc;
        }
        .skill-level {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(56, 189, 248, 0.15);
            color: var(--accent);
            margin-bottom: 16px;
        }
        .skill-desc {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 32px;
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
        @media (max-width: 640px) {
            .card {
                padding: 32px 20px;
            }
            .grid-skills {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="card">
            <div class="header-area">
                <span class="badge">Kompetensi Teknis</span>
                <h1>Keahlian & Spesialisasi</h1>
                <p>Daftar teknologi, bahasa pemrograman, dan framework yang saya kuasai dalam pengembangan perangkat lunak dinamis.</p>
            </div>

            <div class="grid-skills">
                @forelse($skills as $skill)
                    <div class="skill-card">
                        <div>
                            <div class="skill-icon {{ strtolower($skill->name) }}">
                                @if(strtolower($skill->name) == 'laravel')
                                    <i class="fab fa-laravel"></i>
                                @elseif(strtolower($skill->name) == 'php')
                                    <i class="fab fa-php"></i>
                                @elseif(strtolower($skill->name) == 'javascript')
                                    <i class="fab fa-js"></i>
                                @elseif(strtolower($skill->name) == 'mysql')
                                    <i class="fas fa-database"></i>
                                @else
                                    <i class="fas fa-code"></i>
                                @endif
                            </div>
                            <h2 class="skill-name">{{ $skill->name }}</h2>
                            <span class="skill-level">{{ $skill->level }}</span>
                        </div>
                        <p class="skill-desc">{{ $skill->description }}</p>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: var(--text-muted);">
                        <i class="fas fa-folder-open fa-3x mb-3"></i>
                        <p>Belum ada data keahlian yang ditambahkan ke database.</p>
                    </div>
                @endforelse
            </div>

            <div class="actions">
                <a href="/" class="button-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali ke Profil
                </a>
            </div>
        </section>
    </main>
</body>
</html>
