<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendidikan - Muhammad Muharrik Imaduddin</title>
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
            max-width: 900px;
            margin: 0 auto;
            padding: 48px 24px;
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
        .education-list {
            display: grid;
            gap: 24px;
            margin-bottom: 40px;
        }
        .edu-card {
            background: var(--surface-soft);
            border: 1px solid rgba(148, 163, 184, 0.12);
            border-radius: 24px;
            padding: 32px;
            display: flex;
            align-items: center;
            gap: 24px;
            transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
        }
        .edu-card:hover {
            transform: translateY(-4px);
            border-color: var(--accent);
            box-shadow: 0 15px 30px rgba(56, 189, 248, 0.12);
        }
        .edu-icon {
            width: 64px;
            height: 64px;
            min-width: 64px;
            border-radius: 20px;
            background: var(--accent-soft);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        .edu-details {
            flex-grow: 1;
        }
        .school-name {
            font-size: 1.35rem;
            font-weight: 700;
            margin: 0 0 6px;
            color: #f8fafc;
        }
        .degree-info {
            margin: 0 0 12px;
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.5;
        }
        .year-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(148, 163, 184, 0.12);
            color: var(--text);
            border: 1px solid rgba(148, 163, 184, 0.18);
        }
        .edu-card:first-of-type .year-badge {
            background: var(--accent-soft);
            color: var(--accent);
            border-color: rgba(56, 189, 248, 0.25);
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: 32px;
        }
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
            background: rgba(148, 163, 184, 0.14);
            color: var(--text);
            border: 1px solid rgba(148, 163, 184, 0.18);
        }
        .button-secondary:hover {
            transform: translateY(-2px);
            background: rgba(148, 163, 184, 0.2);
        }
        @media (max-width: 640px) {
            .card {
                padding: 32px 20px;
            }
            .edu-card {
                flex-direction: column;
                align-items: flex-start;
                padding: 24px;
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="card">
            <div class="header-area">
                <span class="badge">Riwayat Akademis</span>
                <h1>Latar Belakang Pendidikan</h1>
                <p>Informasi formal mengenai institusi sekolah dan universitas tempat saya menimba ilmu.</p>
            </div>

            <div class="education-list">
                @forelse($educations as $edu)
                    <div class="edu-card">
                        <div class="edu-icon">
                            @if(str_contains(strtolower($edu->school_name), 'universitas') || str_contains(strtolower($edu->school_name), 'university'))
                                <i class="fas fa-university"></i>
                            @else
                                <i class="fas fa-school"></i>
                            @endif
                        </div>
                        <div class="edu-details">
                            <h2 class="school-name">{{ $edu->school_name }}</h2>
                            <p class="degree-info">{{ $edu->degree }}</p>
                            <span class="year-badge">
                                <i class="far fa-calendar-alt"></i> {{ $edu->start_year }} — {{ $edu->end_year ?? 'Sekarang' }}
                            </span>
                        </div>
                    </div>
                @empty
                    <div style="text-align: center; padding: 40px; color: var(--text-muted);">
                        <i class="fas fa-graduation-cap fa-3x mb-3" style="opacity: 0.5;"></i>
                        <p>Belum ada data riwayat pendidikan.</p>
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
