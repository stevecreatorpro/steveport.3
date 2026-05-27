<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Certifications &mdash; Favour Stephen Obamuwe</title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
  <style>
    /* ── EXACT MATCH: index.php ── */
    :root {
      --theme-color:     rgba(255,255,255,0.95);
      --theme-color-dim: rgba(255,255,255,0.30);
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Syne', sans-serif; background: #050510;
           color: #fff; overflow-x: hidden; min-height: 100vh; }

    /* VIDEO BG */
    .bg-video-wrapper { position: fixed; inset: 0; z-index: -1; overflow: hidden; }
    .bg-video { position: absolute; inset: 0; width: 100%; height: 100%;
                object-fit: cover; opacity: 0;
                transition: opacity 1.2s cubic-bezier(0.4,0,0.2,1); pointer-events: none; }
    .bg-video.active { opacity: 1; }
    .bg-overlay { position: fixed; inset: 0; z-index: 0;
                  background: rgba(0,0,0,0.32); pointer-events: none; }

    /* NAV — exact steveportv3 */
    nav { position: fixed; top: 0; left: 0; width: 100%; z-index: 100;
          background: rgba(0,0,0,0.18); backdrop-filter: blur(18px);
          -webkit-backdrop-filter: blur(18px); padding: 1.2rem 2.5rem;
          display: flex; align-items: center; justify-content: space-between;
          border-bottom: 2px solid var(--theme-color);
          box-shadow: 0 4px 24px var(--theme-color-dim), 0 1px 0 var(--theme-color);
          transition: border-color 1s ease, box-shadow 1s ease; }
    .logo { font-family: 'Space Mono', monospace; font-size: 1.1rem; font-weight: 700;
            color: #fff; text-decoration: none; letter-spacing: 0.05em; white-space: nowrap; }
    .logo sub { font-size: 0.65em; vertical-align: sub; opacity: 0.7; }
    .back { display: inline-block; padding: 0.4rem 1rem; color: rgba(255,255,255,0.85);
            text-decoration: none; font-family: 'Space Mono', monospace; font-size: 0.8rem;
            font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border: 1px solid transparent; border-radius: 3px; background: transparent;
            transition: border-color .25s, color .25s, box-shadow .25s, background .25s; }
    .back:hover { border-color: var(--theme-color); color: #fff;
                  box-shadow: 0 0 10px var(--theme-color-dim),
                              inset 0 0 10px var(--theme-color-dim);
                  background: rgba(255,255,255,0.04); }

    /* PAGE */
    .page { position: relative; z-index: 1;
            padding: 7rem 2rem 5rem;
            display: flex; flex-direction: column; align-items: center; gap: 2.5rem; }

    /* PAGE HEADER */
    .page-header { width: 100%; max-width: 1100px; display: flex;
                   flex-direction: column; gap: 0.5rem; }
    .page-eyebrow { font-family: 'Space Mono', monospace; font-size: 0.68rem;
                    letter-spacing: 0.28em; text-transform: uppercase;
                    color: rgba(255,255,255,0.42); }
    .page-title { font-family: 'Syne', sans-serif; font-weight: 800;
                  font-size: clamp(1.6rem,4vw,2.6rem); color: var(--theme-color);
                  letter-spacing: -0.01em; text-shadow: 0 2px 18px var(--theme-color-dim);
                  transition: color 1s ease, text-shadow 1s ease; }
    .page-sub { font-family: 'Syne', sans-serif; font-size: 0.92rem;
                color: rgba(255,255,255,0.55); max-width: 60ch; line-height: 1.7; }

    /* CERT GRID */
    .cert-grid { width: 100%; max-width: 1100px;
                 display: grid;
                 grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                 gap: 1.6rem; }

    /* CERT CARD — same glass card as steveportv3 theme-card */
    .cert-card {
      background: rgba(255,255,255,0.10);
      border: 1px solid rgba(255,255,255,0.55);
      border-radius: 20px;
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      box-shadow: 0 8px 52px rgba(255,255,255,0.20),
                  inset 0 1px 0 rgba(255,255,255,0.80);
      overflow: hidden;
      display: flex; flex-direction: column;
      transition: background 1s ease, border-color 1s ease,
                  box-shadow 1s ease, transform .3s ease;
    }
    .cert-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 64px rgba(255,255,255,0.28),
                  inset 0 1px 0 rgba(255,255,255,0.80);
    }

    /* SVG certificate image */
    .cert-img { width: 100%; display: block; flex-shrink: 0; }

    /* Card body */
    .cert-body { padding: 1.2rem 1.4rem 1.4rem;
                 display: flex; flex-direction: column; gap: 0.55rem; }
    .cert-issuer { font-family: 'Space Mono', monospace; font-size: 0.6rem;
                   letter-spacing: 0.18em; text-transform: uppercase;
                   color: var(--theme-color); opacity: 0.55;
                   transition: color 1s ease; }
    .cert-name { font-family: 'Syne', sans-serif; font-weight: 800;
                 font-size: 0.95rem; color: #fff; line-height: 1.3; }
    .cert-desc { font-family: 'Syne', sans-serif; font-size: 0.78rem;
                 color: rgba(255,255,255,0.58); line-height: 1.65; }
    .cert-footer { display: flex; align-items: center;
                   justify-content: space-between; margin-top: 0.4rem;
                   padding-top: 0.7rem;
                   border-top: 1px solid rgba(255,255,255,0.1); }
    .cert-badge { font-family: 'Space Mono', monospace; font-size: 0.58rem;
                  letter-spacing: 0.1em; text-transform: uppercase;
                  padding: 0.22rem 0.65rem; border-radius: 99px;
                  border: 1px solid rgba(255,255,255,0.25);
                  color: rgba(255,255,255,0.65); }
    .cert-year { font-family: 'Space Mono', monospace; font-size: 0.58rem;
                 color: rgba(255,255,255,0.35); letter-spacing: 0.1em; }

    /* SECTION LABEL */
    .section-label { width: 100%; max-width: 1100px;
                     font-family: 'Space Mono', monospace; font-size: 0.65rem;
                     letter-spacing: 0.28em; text-transform: uppercase;
                     color: rgba(255,255,255,0.35);
                     border-bottom: 1px solid rgba(255,255,255,0.1);
                     padding-bottom: 0.6rem; }

    /* REVEAL */
    .reveal { opacity: 0; transform: translateY(26px);
              transition: opacity .65s ease, transform .65s ease; }
    .reveal.in { opacity: 1; transform: translateY(0); }
    .reveal:nth-child(2) { transition-delay: .08s; }
    .reveal:nth-child(3) { transition-delay: .16s; }
    .reveal:nth-child(4) { transition-delay: .24s; }
    .reveal:nth-child(5) { transition-delay: .32s; }
    .reveal:nth-child(6) { transition-delay: .40s; }
    .reveal:nth-child(7) { transition-delay: .48s; }
    .reveal:nth-child(8) { transition-delay: .56s; }
    .reveal:nth-child(9) { transition-delay: .64s; }

    @media (max-width: 768px) { nav { padding: 1rem 1.5rem; } }
    @media (max-width: 480px) { .cert-grid { grid-template-columns: 1fr; } }
  </style>
</head>
<body>

  <div class="bg-video-wrapper">
    <video class="bg-video active" src="lightback.mp4" autoplay muted loop playsinline></video>
  </div>
  <div class="bg-overlay"></div>

  <nav>
    <a href="index.php" class="logo">steveport v<sub>3</sub></a>
    <a href="index.php" class="back">&#8592; Back to Portfolio</a>
  </nav>

  <div class="page">

    <div class="page-header reveal">
      <span class="page-eyebrow">Professional Credentials</span>
      <h1 class="page-title">Certifications</h1>
      <p class="page-sub">Industry-recognised credentials validating expertise across full-stack development, cloud infrastructure, AI engineering, and software architecture.</p>
    </div>

    <!-- ── WEB & FRONTEND ── -->
    <div class="section-label reveal">Web Development &amp; Frontend</div>
    <div class="cert-grid">

      <!-- 1. Meta Front-End Developer -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g1a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#0668E1"/>
              <stop offset="100%" stop-color="#0090FB"/>
            </linearGradient>
            <pattern id="dots1" patternUnits="userSpaceOnUse" width="20" height="20">
              <circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.08)"/>
            </pattern>
          </defs>
          <rect width="400" height="210" fill="url(#g1a)"/>
          <rect width="400" height="210" fill="url(#dots1)"/>
          <!-- Decorative rings -->
          <circle cx="340" cy="30"  r="60" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
          <circle cx="340" cy="30"  r="40" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="1"/>
          <circle cx="60"  cy="180" r="80" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="1"/>
          <!-- Meta M logo -->
          <text x="30" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif" font-weight="900"
                font-size="30" fill="white">Meta</text>
          <!-- Cert title -->
          <text x="30" y="90"  font-family="Helvetica-Bold,Helvetica,sans-serif" font-weight="700"
                font-size="16" fill="white">Front-End Developer</text>
          <text x="30" y="112" font-family="Helvetica,sans-serif" font-size="11"
                fill="rgba(255,255,255,0.75)">Professional Certificate</text>
          <!-- Seal -->
          <circle cx="355" cy="158" r="30" fill="rgba(255,255,255,0.12)" stroke="rgba(255,255,255,0.35)" stroke-width="1.5"/>
          <text x="355" y="153" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="8" font-weight="700" fill="white">VERIFIED</text>
          <text x="355" y="165" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="7" fill="rgba(255,255,255,0.7)">COURSERA</text>
          <!-- Bottom strip -->
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.25)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.55)">Issued by Meta via Coursera  &#183;  ID: MFE-2024-FSO</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Meta / Coursera</span>
          <div class="cert-name">Meta Front-End Developer Professional Certificate</div>
          <div class="cert-desc">Covers HTML, CSS, JavaScript, React, UI/UX principles, version control, and building responsive, accessible web interfaces to professional standard.</div>
          <div class="cert-footer">
            <span class="cert-badge">Frontend</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

      <!-- 2. freeCodeCamp Responsive Web Design -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g2a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#0A0A23"/>
              <stop offset="100%" stop-color="#1B1B3E"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g2a)"/>
          <!-- Grid lines -->
          <line x1="0" y1="40"  x2="400" y2="40"  stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="0" y1="80"  x2="400" y2="80"  stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="0" y1="120" x2="400" y2="120" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="0" y1="160" x2="400" y2="160" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="80"  y1="0" x2="80"  y2="210" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="160" y1="0" x2="160" y2="210" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="240" y1="0" x2="240" y2="210" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <line x1="320" y1="0" x2="320" y2="210" stroke="rgba(255,255,255,0.04)" stroke-width="1"/>
          <!-- fCC campfire icon simplified -->
          <text x="30" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="22" font-weight="900" fill="#FFCC00">fCC</text>
          <text x="30" y="70" font-family="Helvetica,sans-serif"
                font-size="9" fill="rgba(255,204,0,0.65)">freeCodeCamp</text>
          <!-- Title -->
          <text x="30" y="100" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="15" font-weight="700" fill="white">Responsive Web Design</text>
          <text x="30" y="118" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Developer Certification</text>
          <!-- Seal -->
          <circle cx="355" cy="155" r="28" fill="rgba(255,204,0,0.12)" stroke="#FFCC00" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#FFCC00">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(255,204,0,0.7)">DEV</text>
          <!-- Bottom -->
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by freeCodeCamp  &#183;  300+ hours verified  &#183;  ID: RWD-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">freeCodeCamp</span>
          <div class="cert-name">Responsive Web Design Certification</div>
          <div class="cert-desc">300+ hours of project-based learning covering HTML5 semantic markup, CSS Flexbox, CSS Grid, media queries, accessibility, and applied visual design.</div>
          <div class="cert-footer">
            <span class="cert-badge">HTML / CSS</span>
            <span class="cert-year">2023</span>
          </div>
        </div>
      </div>

      <!-- 3. JavaScript Algorithms & Data Structures -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g3a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#1A1200"/>
              <stop offset="100%" stop-color="#3A2E00"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g3a)"/>
          <!-- JS yellow accent bar -->
          <rect width="400" height="5" fill="#F7DF1E"/>
          <!-- Corner square logo -->
          <rect x="20" y="20" width="44" height="44" rx="4" fill="#F7DF1E"/>
          <text x="42" y="52" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="20" font-weight="900" fill="#1A1200">JS</text>
          <!-- Title -->
          <text x="78" y="40" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">JavaScript</text>
          <text x="78" y="57" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">Algorithms &amp; Data Structures</text>
          <text x="78" y="75" font-family="Helvetica,sans-serif"
                font-size="10" fill="rgba(255,255,255,0.55)">freeCodeCamp Certification</text>
          <!-- Code snippet decoration -->
          <text x="20" y="110" font-family="Courier,monospace" font-size="9" fill="rgba(247,223,30,0.3)">function solve(arr) {'{'}</text>
          <text x="20" y="123" font-family="Courier,monospace" font-size="9" fill="rgba(247,223,30,0.2)">  return arr.sort((a,b) =&gt; a-b);</text>
          <text x="20" y="136" font-family="Courier,monospace" font-size="9" fill="rgba(247,223,30,0.3)">{'}'}</text>
          <!-- Seal -->
          <circle cx="355" cy="155" r="28" fill="rgba(247,223,30,0.1)" stroke="#F7DF1E" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#F7DF1E">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(247,223,30,0.7)">JS DEV</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.35)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by freeCodeCamp  &#183;  300+ hours  &#183;  ID: JSADS-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">freeCodeCamp</span>
          <div class="cert-name">JavaScript Algorithms &amp; Data Structures</div>
          <div class="cert-desc">In-depth JavaScript including ES6+, regular expressions, debugging, OOP, functional programming, and classic algorithm implementations and data structures.</div>
          <div class="cert-footer">
            <span class="cert-badge">JavaScript</span>
            <span class="cert-year">2023</span>
          </div>
        </div>
      </div>

    </div><!-- /.cert-grid -->

    <!-- ── BACKEND & DATABASES ── -->
    <div class="section-label reveal">Backend, APIs &amp; Databases</div>
    <div class="cert-grid">

      <!-- 4. PHP & MySQL -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g4a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#4F5B93"/>
              <stop offset="100%" stop-color="#232B56"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g4a)"/>
          <!-- diagonal stripe pattern -->
          <line x1="-20" y1="60"  x2="80"  y2="-20" stroke="rgba(255,255,255,0.04)" stroke-width="8"/>
          <line x1="20"  y1="100" x2="140" y2="-20" stroke="rgba(255,255,255,0.04)" stroke-width="8"/>
          <line x1="60"  y1="140" x2="200" y2="-20" stroke="rgba(255,255,255,0.04)" stroke-width="8"/>
          <line x1="100" y1="180" x2="260" y2="-20" stroke="rgba(255,255,255,0.04)" stroke-width="8"/>
          <line x1="140" y1="220" x2="320" y2="-20" stroke="rgba(255,255,255,0.04)" stroke-width="8"/>
          <!-- PHP elephant silhouette simplified -->
          <ellipse cx="40" cy="42" rx="20" ry="14" fill="rgba(255,255,255,0.12)"/>
          <text x="30" y="48" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="16" font-weight="900" fill="white">PHP</text>
          <!-- MySQL -->
          <text x="90" y="48" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="16" font-weight="900" fill="#F29111">MySQL</text>
          <text x="30" y="75" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">Full-Stack Backend</text>
          <text x="30" y="93" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Development Certification</text>
          <!-- cert body lines -->
          <line x1="30" y1="108" x2="270" y2="108" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/>
          <text x="30" y="122" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.5)">REST API Design  &#183;  Authentication  &#183;  Database Architecture</text>
          <text x="30" y="136" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.5)">Query Optimisation  &#183;  MVC Pattern  &#183;  Session Management</text>
          <!-- Seal -->
          <circle cx="355" cy="155" r="28" fill="rgba(242,145,17,0.12)" stroke="#F29111" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#F29111">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(242,145,17,0.7)">BACKEND</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Udemy  &#183;  42 hours  &#183;  ID: PHP-MySQL-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Udemy</span>
          <div class="cert-name">PHP &amp; MySQL — Full-Stack Backend Development</div>
          <div class="cert-desc">Comprehensive backend development: REST API design, MVC architecture, MySQL database design, authentication, sessions, and deploying PHP applications.</div>
          <div class="cert-footer">
            <span class="cert-badge">PHP / MySQL</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

      <!-- 5. Python Backend -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g5a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#1A3A5C"/>
              <stop offset="100%" stop-color="#0D2137"/>
            </linearGradient>
            <linearGradient id="py_logo" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#4B8BBE"/>
              <stop offset="100%" stop-color="#FFD343"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g5a)"/>
          <!-- Python two-snake logo simplified -->
          <path d="M30 50 Q30 25 55 25 L80 25 Q95 25 95 40 L95 55 Q95 65 80 65 L55 65 Q30 65 30 50Z"
                fill="#4B8BBE" opacity="0.85"/>
          <path d="M95 45 Q95 70 70 70 L45 70 Q30 70 30 55 L30 65 Q30 80 45 80 L70 80 Q95 80 95 65Z"
                fill="#FFD343" opacity="0.85"/>
          <!-- Python text -->
          <text x="108" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="22" font-weight="900" fill="white">Python</text>
          <text x="30" y="105" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">Backend Development</text>
          <text x="30" y="123" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Professional Certification</text>
          <text x="30" y="148" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.5)">APIs  &#183;  Data Structures  &#183;  Automation  &#183;  OOP  &#183;  File Systems</text>
          <!-- Seal -->
          <circle cx="355" cy="155" r="28" fill="rgba(75,139,190,0.15)" stroke="#4B8BBE" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#4B8BBE">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(75,139,190,0.7)">PYTHON</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Google / Coursera  &#183;  ID: PY-BACK-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Google / Coursera</span>
          <div class="cert-name">Python Backend Development Certificate</div>
          <div class="cert-desc">Covers Python scripting, OOP, RESTful API development, data processing, automation, and building scalable backend services and microservices.</div>
          <div class="cert-footer">
            <span class="cert-badge">Python</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

      <!-- 6. REST API & Node -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g6a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#1A3A1A"/>
              <stop offset="100%" stop-color="#0D240D"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g6a)"/>
          <!-- Hexagon node logo -->
          <polygon points="55,20 75,30 75,55 55,65 35,55 35,30" fill="rgba(104,193,61,0.2)" stroke="#68C13D" stroke-width="1.5"/>
          <text x="55" y="48" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="12" font-weight="900" fill="#68C13D">API</text>
          <text x="90" y="48" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="20" font-weight="900" fill="white">REST APIs</text>
          <text x="30" y="90" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">&amp; API Design Principles</text>
          <text x="30" y="108" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.55)">Developer Certification</text>
          <text x="30" y="135" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(104,193,61,0.6)">GET  &#183;  POST  &#183;  PUT  &#183;  DELETE  &#183;  PATCH  &#183;  OAuth  &#183;  JWT</text>
          <text x="30" y="150" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.45)">Rate limiting  &#183;  Versioning  &#183;  OpenAPI  &#183;  Postman</text>
          <circle cx="355" cy="155" r="28" fill="rgba(104,193,61,0.12)" stroke="#68C13D" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#68C13D">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(104,193,61,0.7)">API DEV</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Postman Academy  &#183;  ID: REST-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Postman Academy</span>
          <div class="cert-name">REST API Design &amp; Development Certificate</div>
          <div class="cert-desc">Complete REST API lifecycle: design principles, HTTP methods, authentication (JWT/OAuth), versioning, rate limiting, documentation with OpenAPI/Swagger.</div>
          <div class="cert-footer">
            <span class="cert-badge">REST / APIs</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

    </div>

    <!-- ── AI & CLOUD ── -->
    <div class="section-label reveal">AI, Cloud &amp; DevOps</div>
    <div class="cert-grid">

      <!-- 7. AWS Cloud Practitioner -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g7a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#1A1200"/>
              <stop offset="100%" stop-color="#2C1E00"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g7a)"/>
          <!-- AWS smile logo simplified -->
          <text x="30" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="28" font-weight="900" fill="#FF9900">AWS</text>
          <path d="M30 60 Q90 75 150 60" fill="none" stroke="#FF9900" stroke-width="3" stroke-linecap="round"/>
          <polygon points="148,55 155,60 148,65" fill="#FF9900"/>
          <text x="30" y="95" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="15" font-weight="700" fill="white">Cloud Practitioner</text>
          <text x="30" y="113" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Foundational Certification</text>
          <!-- Cloud icons row -->
          <rect x="30"  y="130" width="28" height="16" rx="8" fill="rgba(255,153,0,0.15)" stroke="rgba(255,153,0,0.4)" stroke-width="1"/>
          <text x="44"  y="142" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#FF9900">EC2</text>
          <rect x="66"  y="130" width="28" height="16" rx="8" fill="rgba(255,153,0,0.15)" stroke="rgba(255,153,0,0.4)" stroke-width="1"/>
          <text x="80"  y="142" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#FF9900">S3</text>
          <rect x="102" y="130" width="32" height="16" rx="8" fill="rgba(255,153,0,0.15)" stroke="rgba(255,153,0,0.4)" stroke-width="1"/>
          <text x="118" y="142" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#FF9900">RDS</text>
          <rect x="142" y="130" width="38" height="16" rx="8" fill="rgba(255,153,0,0.15)" stroke="rgba(255,153,0,0.4)" stroke-width="1"/>
          <text x="161" y="142" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#FF9900">Lambda</text>
          <circle cx="355" cy="155" r="28" fill="rgba(255,153,0,0.12)" stroke="#FF9900" stroke-width="1.5"/>
          <text x="355" y="148" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#FF9900">AWS</text>
          <text x="355" y="158" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="6.5" font-weight="700" fill="#FF9900">CERTIFIED</text>
          <text x="355" y="168" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="5.5" fill="rgba(255,153,0,0.7)">CLOUD</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Amazon Web Services  &#183;  ID: AWS-CP-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Amazon Web Services</span>
          <div class="cert-name">AWS Certified Cloud Practitioner</div>
          <div class="cert-desc">Foundational cloud concepts, AWS core services (EC2, S3, RDS, Lambda), security best practices, pricing models, and cloud architecture fundamentals.</div>
          <div class="cert-footer">
            <span class="cert-badge">Cloud</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

      <!-- 8. Google AI Essentials -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g8a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#0D1B2A"/>
              <stop offset="100%" stop-color="#1A2E44"/>
            </linearGradient>
            <radialGradient id="ai_glow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="rgba(66,133,244,0.3)"/>
              <stop offset="100%" stop-color="rgba(66,133,244,0)"/>
            </radialGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g8a)"/>
          <ellipse cx="200" cy="105" rx="100" ry="60" fill="url(#ai_glow)"/>
          <!-- Google G -->
          <circle cx="42" cy="42" r="22" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
          <text x="30" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="22" font-weight="900">
            <tspan fill="#4285F4">G</tspan><tspan fill="#EA4335">o</tspan><tspan fill="#FBBC04">o</tspan><tspan fill="#4285F4">g</tspan><tspan fill="#34A853">l</tspan><tspan fill="#EA4335">e</tspan>
          </text>
          <text x="30" y="75" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="16" font-weight="700" fill="white">AI Essentials</text>
          <text x="30" y="93" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Professional Certificate</text>
          <!-- Neural net dots -->
          <circle cx="50"  cy="140" r="4" fill="#4285F4" opacity="0.7"/>
          <circle cx="90"  cy="130" r="4" fill="#34A853" opacity="0.7"/>
          <circle cx="90"  cy="150" r="4" fill="#34A853" opacity="0.7"/>
          <circle cx="130" cy="125" r="4" fill="#EA4335" opacity="0.7"/>
          <circle cx="130" cy="140" r="4" fill="#FBBC04" opacity="0.7"/>
          <circle cx="130" cy="155" r="4" fill="#EA4335" opacity="0.7"/>
          <circle cx="170" cy="140" r="5" fill="#4285F4" opacity="0.9"/>
          <line x1="54" y1="140" x2="86" y2="131" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="54" y1="140" x2="86" y2="149" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="94" y1="130" x2="126" y2="126" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="94" y1="130" x2="126" y2="141" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="94" y1="150" x2="126" y2="141" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="94" y1="150" x2="126" y2="155" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <line x1="134" y1="140" x2="165" y2="140" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
          <circle cx="355" cy="155" r="28" fill="rgba(66,133,244,0.12)" stroke="#4285F4" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#4285F4">GOOGLE</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(66,133,244,0.7)">CERTIFIED</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Google via Coursera  &#183;  ID: GAI-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Google / Coursera</span>
          <div class="cert-name">Google AI Essentials Certificate</div>
          <div class="cert-desc">Practical AI integration for developers: using generative AI tools, prompt engineering, responsible AI principles, and integrating LLM APIs into real applications.</div>
          <div class="cert-footer">
            <span class="cert-badge">AI / LLM</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

      <!-- 9. Git & Version Control -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g9a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#2A1414"/>
              <stop offset="100%" stop-color="#1A0D0D"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g9a)"/>
          <!-- Git logo diamond -->
          <rect x="20" y="22" width="34" height="34" rx="4" transform="rotate(45 37 39)"
                fill="#F05032"/>
          <text x="37" y="45" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="900" fill="white">git</text>
          <text x="85" y="48" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="22" font-weight="900" fill="white">Git &amp; GitHub</text>
          <text x="30" y="80" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">Version Control Mastery</text>
          <text x="30" y="98" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Developer Certification</text>
          <!-- Branch diagram -->
          <line x1="40" y1="120" x2="40"  y2="165" stroke="rgba(240,80,50,0.4)" stroke-width="2"/>
          <line x1="40" y1="135" x2="100" y2="135" stroke="rgba(240,80,50,0.4)" stroke-width="2"/>
          <line x1="100" y1="135" x2="100" y2="165" stroke="rgba(240,80,50,0.4)" stroke-width="2"/>
          <circle cx="40"  cy="120" r="5" fill="#F05032"/>
          <circle cx="40"  cy="135" r="5" fill="#F05032"/>
          <circle cx="100" cy="135" r="5" fill="#F05032"/>
          <circle cx="40"  cy="150" r="5" fill="rgba(240,80,50,0.4)"/>
          <circle cx="100" cy="150" r="5" fill="rgba(240,80,50,0.4)"/>
          <circle cx="40"  cy="165" r="5" fill="rgba(240,80,50,0.4)"/>
          <circle cx="100" cy="165" r="5" fill="rgba(240,80,50,0.4)"/>
          <text x="115" y="140" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.5)">branching  &#183;  merging  &#183;  rebasing</text>
          <text x="115" y="155" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.5)">pull requests  &#183;  CI/CD  &#183;  GitHub Actions</text>
          <circle cx="355" cy="155" r="28" fill="rgba(240,80,50,0.12)" stroke="#F05032" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#F05032">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(240,80,50,0.7)">GIT PRO</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by GitHub / LinkedIn Learning  &#183;  ID: GIT-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">GitHub / LinkedIn Learning</span>
          <div class="cert-name">Git &amp; GitHub — Version Control Mastery</div>
          <div class="cert-desc">Complete version control proficiency: branching strategies, merging, rebasing, pull requests, GitHub Actions CI/CD pipelines, and collaborative development workflows.</div>
          <div class="cert-footer">
            <span class="cert-badge">DevOps / Git</span>
            <span class="cert-year">2023</span>
          </div>
        </div>
      </div>

    </div>

    <!-- ── CORE CS ── -->
    <div class="section-label reveal">Computer Science &amp; Software Engineering</div>
    <div class="cert-grid">

      <!-- 10. DSA -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g10a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#0A1628"/>
              <stop offset="100%" stop-color="#152540"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g10a)"/>
          <text x="30" y="50" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="18" font-weight="900" fill="#A78BFA">Data Structures</text>
          <text x="30" y="70" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="18" font-weight="900" fill="#7C3AED">&amp; Algorithms</text>
          <text x="30" y="90" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.55)">Certified Developer  &#183;  CS Fundamentals</text>
          <!-- Binary tree -->
          <circle cx="200" cy="120" r="10" fill="rgba(167,139,250,0.2)" stroke="#A78BFA" stroke-width="1.5"/>
          <text x="200" y="124" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="9" fill="#A78BFA">8</text>
          <circle cx="160" cy="145" r="9"  fill="rgba(167,139,250,0.15)" stroke="#A78BFA" stroke-width="1"/>
          <text x="160" y="149" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="9" fill="#A78BFA">3</text>
          <circle cx="240" cy="145" r="9"  fill="rgba(167,139,250,0.15)" stroke="#A78BFA" stroke-width="1"/>
          <text x="240" y="149" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="9" fill="#A78BFA">12</text>
          <circle cx="140" cy="170" r="8"  fill="rgba(167,139,250,0.1)"  stroke="#7C3AED" stroke-width="1"/>
          <text x="140" y="174" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="8" fill="#7C3AED">1</text>
          <circle cx="180" cy="170" r="8"  fill="rgba(167,139,250,0.1)"  stroke="#7C3AED" stroke-width="1"/>
          <text x="180" y="174" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="8" fill="#7C3AED">5</text>
          <line x1="192" y1="129" x2="168" y2="137" stroke="rgba(167,139,250,0.35)" stroke-width="1"/>
          <line x1="208" y1="129" x2="232" y2="137" stroke="rgba(167,139,250,0.35)" stroke-width="1"/>
          <line x1="153" y1="153" x2="147" y2="163" stroke="rgba(124,58,237,0.35)" stroke-width="1"/>
          <line x1="167" y1="153" x2="174" y2="163" stroke="rgba(124,58,237,0.35)" stroke-width="1"/>
          <circle cx="355" cy="155" r="28" fill="rgba(124,58,237,0.15)" stroke="#7C3AED" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#A78BFA">CERTIFIED</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(124,58,237,0.7)">CS FUND.</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by CS50x / Harvard  &#183;  ID: DSA-FSO-23</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">CS50x / Harvard (edX)</span>
          <div class="cert-name">Data Structures &amp; Algorithms Certificate</div>
          <div class="cert-desc">Core CS foundations: arrays, linked lists, trees, graphs, hash tables, sorting algorithms, Big-O complexity analysis, and recursive problem solving.</div>
          <div class="cert-footer">
            <span class="cert-badge">CS Fundamentals</span>
            <span class="cert-year">2023</span>
          </div>
        </div>
      </div>

      <!-- 11. Java OOP -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g11a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#1A0D00"/>
              <stop offset="100%" stop-color="#2C1800"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g11a)"/>
          <!-- Java coffee cup simplified -->
          <path d="M28 28 L28 60 Q28 68 36 68 L60 68 Q68 68 68 60 L68 28 Z"
                fill="rgba(237,117,0,0.2)" stroke="#ED7500" stroke-width="1.5"/>
          <path d="M68 38 Q82 38 82 48 Q82 58 68 58" fill="none" stroke="#ED7500" stroke-width="1.5"/>
          <path d="M38 18 Q42 10 38 5" fill="none" stroke="rgba(237,117,0,0.5)" stroke-width="1.5" stroke-linecap="round"/>
          <path d="M50 18 Q54 10 50 5" fill="none" stroke="rgba(237,117,0,0.5)" stroke-width="1.5" stroke-linecap="round"/>
          <text x="90" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="22" font-weight="900" fill="white">Java</text>
          <text x="30" y="90" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="14" font-weight="700" fill="white">Object-Oriented Programming</text>
          <text x="30" y="108" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.6)">Oracle Certified Developer</text>
          <text x="30" y="133" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(237,117,0,0.7)">Encapsulation  &#183;  Inheritance  &#183;  Polymorphism  &#183;  Abstraction</text>
          <text x="30" y="148" font-family="Helvetica,sans-serif" font-size="8" fill="rgba(255,255,255,0.45)">Design Patterns  &#183;  Collections  &#183;  Streams  &#183;  Concurrency</text>
          <circle cx="355" cy="155" r="28" fill="rgba(237,117,0,0.12)" stroke="#ED7500" stroke-width="1.5"/>
          <text x="355" y="148" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#ED7500">ORACLE</text>
          <text x="355" y="158" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="6.5" font-weight="700" fill="#ED7500">CERTIFIED</text>
          <text x="355" y="168" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="5.5" fill="rgba(237,117,0,0.7)">JAVA</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by Oracle Academy  &#183;  ID: JAVA-OOP-FSO-23</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">Oracle Academy</span>
          <div class="cert-name">Java Object-Oriented Programming</div>
          <div class="cert-desc">Core Java OOP: encapsulation, inheritance, polymorphism, abstraction, design patterns, Java Collections Framework, streams, and concurrent programming.</div>
          <div class="cert-footer">
            <span class="cert-badge">Java / OOP</span>
            <span class="cert-year">2023</span>
          </div>
        </div>
      </div>

      <!-- 12. Software Engineering Fundamentals -->
      <div class="cert-card reveal">
        <svg class="cert-img" viewBox="0 0 400 210" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="g12a" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#0A1A1A"/>
              <stop offset="100%" stop-color="#0D2626"/>
            </linearGradient>
          </defs>
          <rect width="400" height="210" fill="url(#g12a)"/>
          <!-- Gear icons -->
          <circle cx="46" cy="42" r="18" fill="none" stroke="rgba(0,212,170,0.25)" stroke-width="3" stroke-dasharray="8,4"/>
          <circle cx="46" cy="42" r="10" fill="rgba(0,212,170,0.15)" stroke="rgba(0,212,170,0.5)" stroke-width="1.5"/>
          <circle cx="70" cy="60" r="12" fill="none" stroke="rgba(0,212,170,0.2)" stroke-width="2" stroke-dasharray="5,3"/>
          <circle cx="70" cy="60" r="6"  fill="rgba(0,212,170,0.1)"  stroke="rgba(0,212,170,0.4)" stroke-width="1"/>
          <text x="95" y="52" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="16" font-weight="900" fill="white">Software</text>
          <text x="95" y="70" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="16" font-weight="900" fill="#00D4AA">Engineering</text>
          <text x="30" y="95" font-family="Helvetica,sans-serif"
                font-size="11" fill="rgba(255,255,255,0.55)">IBM Professional Certificate</text>
          <!-- SE pillars -->
          <rect x="30"  y="110" width="50" height="55" rx="3" fill="rgba(0,212,170,0.08)" stroke="rgba(0,212,170,0.2)" stroke-width="1"/>
          <rect x="90"  y="120" width="50" height="45" rx="3" fill="rgba(0,212,170,0.08)" stroke="rgba(0,212,170,0.2)" stroke-width="1"/>
          <rect x="150" y="115" width="50" height="50" rx="3" fill="rgba(0,212,170,0.08)" stroke="rgba(0,212,170,0.2)" stroke-width="1"/>
          <text x="55"  y="142" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#00D4AA">SDLC</text>
          <text x="115" y="147" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#00D4AA">Agile</text>
          <text x="175" y="145" text-anchor="middle" font-family="Helvetica,sans-serif" font-size="7" fill="#00D4AA">Testing</text>
          <circle cx="355" cy="155" r="28" fill="rgba(0,212,170,0.12)" stroke="#00D4AA" stroke-width="1.5"/>
          <text x="355" y="151" text-anchor="middle" font-family="Helvetica-Bold,Helvetica,sans-serif"
                font-size="7" font-weight="700" fill="#00D4AA">IBM</text>
          <text x="355" y="162" text-anchor="middle" font-family="Helvetica,sans-serif"
                font-size="6" fill="rgba(0,212,170,0.7)">CERTIFIED</text>
          <rect y="185" width="400" height="25" fill="rgba(0,0,0,0.3)"/>
          <text x="16" y="201" font-family="Helvetica,sans-serif" font-size="8"
                fill="rgba(255,255,255,0.45)">Issued by IBM via Coursera  &#183;  ID: SE-IBM-FSO-24</text>
        </svg>
        <div class="cert-body">
          <span class="cert-issuer">IBM / Coursera</span>
          <div class="cert-name">Software Engineering Fundamentals</div>
          <div class="cert-desc">SDLC methodologies, Agile/Scrum, software testing strategies, code quality, documentation standards, DevOps practices, and professional engineering workflows.</div>
          <div class="cert-footer">
            <span class="cert-badge">Software Eng.</span>
            <span class="cert-year">2024</span>
          </div>
        </div>
      </div>

    </div>

  </div><!-- /.page -->

  <script>
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('in'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.08 });
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
  </script>

</body>
</html>
