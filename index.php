<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Favour Stephen Obamuwe — Full-Stack Developer with 4+ years experience building premium, production-ready web applications using JavaScript, PHP, Python, Java, HTML and CSS. Specialising in AI-powered web solutions, REST APIs, responsive UI design, and rapid 48-hour MVP delivery. Available for freelance and contract projects worldwide. Zero missed deadlines.">
  <meta name="keywords" content="full-stack developer, web developer Nigeria, PHP developer, JavaScript developer, Python developer, Java developer, AI web development, freelance developer, hire web developer, REST API developer, responsive web design, Favour Stephen Obamuwe, software engineer Nigeria, full stack web developer for hire, custom web application developer, backend developer, frontend developer, HTML CSS developer, MySQL developer, PostgreSQL developer, database developer, API integration developer, LLM integration developer, OpenAI developer, Anthropic Claude developer, AI-powered web apps, prompt engineering, machine learning integration, web app developer, e-commerce developer, portfolio website developer, business website developer, gaming website developer, software development Nigeria, coding expert, programmer for hire, web programmer, application developer, mobile-first developer, UI UX developer, fast web developer, affordable web developer, professional web developer, scalable web applications, production-ready code, clean code developer, software architecture, agile developer, CI CD developer, continuous integration, continuous deployment, version control Git, GitHub developer, Node.js developer, React developer, SaaS developer, startup developer, tech freelancer Nigeria, Abuja developer, remote developer, hire programmer online, best web developer Nigeria, full-stack engineer, software engineering student, Miva Open University, computer science, data structures and algorithms, object oriented programming, MVC architecture, CRUD application developer, JSON REST API, session management, authentication systems, JWT developer, OAuth developer, API design, microservices developer, cloud developer, AWS developer, Linux server developer, cPanel developer, deployment engineer, automated testing developer, code review consultant, technical consultant, digital solutions developer, web systems architect, rapid prototyping, MVP developer, 48 hour MVP, zero missed deadlines, reliable developer, experienced developer, senior developer freelance, software engineering principles, SOLID principles, design patterns, refactoring, debugging expert, performance optimisation, SEO-friendly websites, cross-browser compatibility, accessibility developer, WCAG compliance, web security developer, SQL query optimisation, schema design, relational database expert, NoSQL developer, API documentation, Swagger OpenAPI, Postman API testing, developer portfolio, open to work developer, coding mentor, bootcamp graduate, self-taught programmer, 4 years experience developer, full stack JavaScript developer, MERN stack developer, LAMP stack developer, problem solver, algorithmic thinking, competitive programmer">
  <meta name="author" content="Favour Stephen Obamuwe">
  <meta name="robots" content="index, follow">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link rel="apple-touch-icon" href="favicon.png">
  <meta property="og:title" content="Steveport v3 — Favour Stephen Obamuwe | Full-Stack Developer">
  <meta property="og:description" content="Full-Stack Developer with 4+ years experience. JavaScript, PHP, Python, Java, AI integration. Premium web apps built fast. Available for freelance worldwide.">
  <meta property="og:type" content="website">
  <title>STEVEPORTV3</title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;700;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --theme-color:     rgba(255,255,255,0.95);
      --theme-color-dim: rgba(255,255,255,0.30);
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { min-height: 100vh; font-family: "Syne", sans-serif; overflow-x: hidden; }

    /* VIDEO BG */
    .bg-video-wrapper { position: fixed; inset: 0; z-index: -1; overflow: hidden; }
    .bg-video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 1.2s cubic-bezier(0.4,0,0.2,1); pointer-events: none; }
    .bg-video.active { opacity: 1; }
    .bg-overlay { position: fixed; inset: 0; z-index: 0; background: rgba(0,0,0,0.32); pointer-events: none; }

    /* NAV */
    nav { position: fixed; top: 0; left: 0; width: 100%; z-index: 100; background: rgba(0,0,0,0.18); backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px); padding: 1.2rem 2.5rem; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--theme-color); box-shadow: 0 4px 24px var(--theme-color-dim), 0 1px 0 var(--theme-color); transition: border-color 1s ease, box-shadow 1s ease; }
    .logo { font-family: "Space Mono", monospace; font-size: 1.1rem; font-weight: 700; color: #fff; text-decoration: none; letter-spacing: 0.05em; white-space: nowrap; }
    .logo sub { font-size: 0.65em; vertical-align: sub; opacity: 0.7; }
    .nav-links { display: flex; gap: 0.6rem; list-style: none; align-items: center; }
    .nav-links li a { display: inline-block; padding: 0.4rem 1rem; color: rgba(255,255,255,0.85); text-decoration: none; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; border: 1px solid transparent; border-radius: 3px; background: transparent; transition: border-color 0.25s ease, color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease; }
    .nav-links li a:hover { border-color: var(--theme-color); color: #fff; box-shadow: 0 0 10px var(--theme-color-dim), inset 0 0 10px var(--theme-color-dim); background: rgba(255,255,255,0.04); }
    .nav-mode { position: relative; }
    .nav-mode > a { font-size: 1.55rem !important; letter-spacing: 0 !important; text-transform: none !important; padding: 0.15rem 0.6rem !important; line-height: 1; }

    /* ── THEME TOOLTIP ── */
    .theme-tooltip {
      position: absolute;
      top: calc(100% + 14px);
      right: 0;
      width: 190px;
      background: rgba(8, 8, 28, 0.55);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255,255,255,0.18);
      border-radius: 8px;
      padding: 0.6rem 0.85rem;
      font-family: 'Space Mono', monospace;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      line-height: 1.55;
      color: rgba(255,255,255,0.92);
      text-transform: uppercase;
      text-align: center;
      pointer-events: none;
      z-index: 200;
      opacity: 1;
      transition: opacity 0.6s ease;
    }
    .theme-tooltip.hide { opacity: 0; }

    /* Arrow pointing up toward the Ⓜ */
    .theme-tooltip::before {
      content: '';
      position: absolute;
      top: -7px;
      right: 22px;
      width: 12px;
      height: 12px;
      background: rgba(8, 8, 28, 0.55);
      border-left: 1px solid rgba(255,255,255,0.18);
      border-top: 1px solid rgba(255,255,255,0.18);
      transform: rotate(45deg);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }
    .dropdown { position: absolute; top: calc(100% + 10px); right: 0; min-width: 150px; background: rgba(8,8,28,0.88); backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px); border: 1px solid rgba(255,255,255,0.14); border-radius: 6px; overflow: hidden; list-style: none; opacity: 0; transform: translateY(-8px) scaleY(0.95); transform-origin: top right; pointer-events: none; transition: opacity 0.25s ease, transform 0.25s ease; }
    .dropdown.open { opacity: 1; transform: translateY(0) scaleY(1); pointer-events: all; }
    .dropdown li a { display: block; padding: 0.65rem 1.2rem; color: rgba(255,255,255,0.78); text-decoration: none; font-size: 0.78rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease, color 0.2s ease, padding-left 0.2s ease; }
    .dropdown li:last-child a { border-bottom: none; }
    .dropdown li a:hover, .dropdown li a.active-bg { background: rgba(255,255,255,0.08); color: #fff; padding-left: 1.6rem; }
    .dropdown li a.active-bg { color: rgba(255,255,255,0.8); border-left: 2px solid rgba(255,255,255,0.6); }
    .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; background: none; border: none; padding: 4px; }
    .hamburger span { display: block; width: 24px; height: 2px; background: #fff; border-radius: 2px; transition: transform 0.3s ease, opacity 0.3s ease; }
    .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    /* Mobile close button - hidden by default */
    .nav-close-item { display: none !important; }
    .nav-close { display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.3); border-radius: 6px; cursor: pointer; margin-bottom: 1.2rem; font-size: 1.4rem; font-weight: 300; line-height: 1; color: #fff; transition: background 0.2s ease, border-color 0.2s ease; }
    .nav-close:hover { background: rgba(255,255,255,0.18); border-color: rgba(255,255,255,0.6); }

    @media (max-width: 768px) {
      nav { padding: 1rem 1.5rem; }
      .hamburger { display: flex; }
      .nav-links { position: fixed; top: 0; right: 0; height: 100vh; width: 260px; flex-direction: column; align-items: flex-start; gap: 0.5rem; padding: 1.2rem 2rem 2rem; background: rgba(8,8,28,0.97); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-left: 1px solid rgba(255,255,255,0.08); transform: translateX(100%); transition: transform 0.35s cubic-bezier(0.4,0,0.2,1); }
      .nav-links.open { transform: translateX(0); }
      .nav-links li { width: 100%; }
      .nav-links li a { display: block; width: 100%; padding: 0.6rem 1rem; font-size: 0.85rem; }
      .nav-close-item { display: flex !important; justify-content: flex-end; }
      .nav-mode { width: 100%; }
      .dropdown { position: static; opacity: 1 !important; transform: none !important; pointer-events: all; border: none; border-top: 1px solid rgba(255,255,255,0.08); border-radius: 0; background: rgba(255,255,255,0.04); backdrop-filter: none; display: none; max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
      .dropdown.open { display: block; max-height: 300px; }
      .dropdown li a { padding-left: 1.5rem; font-size: 0.8rem; }
    }

    /* HERO */
    .hero { position: relative; z-index: 1; min-height: 100vh; display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 1.6rem; padding: 7rem 2rem 3rem; }

    /* THEME CARD */
    .theme-card {
      --card-bg:     rgba(230,240,255,0.12);
      --card-border: rgba(220,235,255,0.35);
      --card-glow:   rgba(200,220,255,0.18);
      --card-shine:  rgba(255,255,255,0.55);
      --card-accent: rgba(200,220,255,0.7);
      width: min(820px,92vw); background: var(--card-bg); border: 1px solid var(--card-border); border-radius: 20px; backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); box-shadow: 0 8px 52px var(--card-glow), inset 0 1px 0 var(--card-shine); padding: clamp(2.2rem,6vw,3.6rem); display: flex; flex-direction: column; align-items: flex-start; gap: 1.2rem; transition: background 1s ease, border-color 1s ease, box-shadow 1s ease, opacity 0.35s ease;
    }
    .theme-card::before { content: ""; display: block; width: 52px; height: 3px; border-radius: 99px; background: var(--card-accent); transition: background 1s ease; margin-bottom: 0.2rem; }
    .theme-card h1 { font-family: "Syne", sans-serif; font-size: clamp(1.15rem,2.6vw,1.65rem); font-weight: 800; color: var(--card-accent); letter-spacing: -0.02em; line-height: 1.2; white-space: nowrap; width: 100%; overflow: hidden; text-align: left; transition: color 1s ease; text-shadow: 0 1px 4px rgba(0,0,0,0.25); }
    @media (max-width: 600px) { .theme-card h1 { white-space: normal; font-size: clamp(1.1rem,5vw,1.3rem); } }
    .stat-card { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.35rem; padding: 2rem 2.8rem; border-radius: 14px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); text-align: center; }
    .stat-card h2 { font-family: "Syne", sans-serif; font-size: clamp(2.8rem,6vw,4rem); font-weight: 800; color: #fff; line-height: 1; letter-spacing: -0.03em; text-shadow: 0 2px 18px rgba(0,0,0,0.35); }
    .stat-card span { font-family: "Syne", sans-serif; font-size: clamp(0.85rem,1.8vw,1rem); font-weight: 500; color: rgba(255,255,255,0.85); letter-spacing: 0.06em; text-transform: lowercase; text-shadow: 0 1px 8px rgba(0,0,0,0.3); }
    .theme-card--stat { align-items: center; justify-content: flex-start; padding-bottom: 2.4rem; }
    .theme-card--stat .skills-title { color: var(--card-accent); text-shadow: none; font-size: clamp(1rem,2.5vw,1.4rem); margin-top: 0.4rem; margin-bottom: 1.2rem; width: 100%; text-align: center !important; white-space: normal; align-self: center; }
    .theme-card p { font-family: "Syne", sans-serif; font-size: clamp(1.05rem,2.4vw,1.22rem); font-weight: 400; color: rgba(255,255,255,0.75); line-height: 1.8; text-align: left; max-width: 62ch; text-shadow: 0 1px 4px rgba(0,0,0,0.2); }
    .theme-card p b { font-weight: 800; color: #fff; }
    .theme-card hr { width: 100%; border: none; border-top: 1px solid rgba(255,255,255,0.1); margin: 0.2rem 0; }

    /* THEME PALETTES */
    .theme-lightback { --card-bg: rgba(255,255,255,0.10); --card-border: rgba(255,255,255,0.55); --card-glow: rgba(255,255,255,0.20); --card-shine: rgba(255,255,255,0.80); --card-accent: rgba(255,255,255,0.95); }
    .theme-darkback  { --card-bg: rgba(10,10,30,0.55);  --card-border: rgba(80,80,130,0.40);  --card-glow: rgba(30,30,80,0.50);   --card-shine: rgba(100,100,180,0.20); --card-accent: rgba(130,130,220,0.85); }
    .theme-warmback  { --card-bg: rgba(80,30,5,0.38);   --card-border: rgba(220,140,60,0.45); --card-glow: rgba(200,100,20,0.35); --card-shine: rgba(255,200,100,0.22); --card-accent: rgba(255,175,70,0.95); }
    .theme-coolback  { --card-bg: rgba(5,35,65,0.42);   --card-border: rgba(60,180,220,0.40); --card-glow: rgba(20,150,200,0.28); --card-shine: rgba(100,220,255,0.18); --card-accent: rgba(70,200,240,0.95); }
    .theme-hotback   { --card-bg: rgba(70,8,5,0.45);    --card-border: rgba(220,60,40,0.50);  --card-glow: rgba(200,40,20,0.40);  --card-shine: rgba(255,120,80,0.20);  --card-accent: rgba(255,90,55,0.95); }
    @media (max-width: 480px) { .theme-card { padding: 1.6rem; } }

    /* SKILLS */
    .skills-cross { display: grid; grid-template-columns: repeat(3,200px); grid-template-rows: repeat(3,auto); gap: 1.2rem; justify-content: center; align-items: start; }
    .skill-card:nth-child(1) { grid-column: 2; grid-row: 1; }
    .skill-card:nth-child(2) { grid-column: 1; grid-row: 2; }
    .skill-card:nth-child(3) { grid-column: 2; grid-row: 2; }
    .skill-card:nth-child(4) { grid-column: 3; grid-row: 2; }
    .skill-card:nth-child(5) { grid-column: 2; grid-row: 3; }
    .skill-card { width: 200px; max-width: 250px; max-height: 260px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); border-radius: 14px; backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); overflow: hidden; display: flex; flex-direction: column; align-items: center; transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 1s ease; }
    .skill-card:hover { transform: translateY(-6px); box-shadow: 0 12px 36px var(--theme-color-dim); border-color: var(--theme-color); }
    .skill-card img { width: 100%; height: 180px; object-fit: cover; display: block; }
    .skill-card .skill-label { width: 100%; padding: 0.6rem 0.5rem; text-align: center; font-family: "Space Mono", monospace; font-size: 0.6rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.88); background: rgba(0,0,0,0.25); text-shadow: 0 1px 6px rgba(0,0,0,0.4); line-height: 1.4; }
    @media (max-width: 680px) { .skills-cross { grid-template-columns: 1fr; grid-template-rows: auto; } .skill-card:nth-child(n) { grid-column: 1; grid-row: auto; width: 100%; max-width: 300px; } }

    /* 3D CAROUSEL */
    .carousel-container { width: 100%; display: flex; flex-direction: column; align-items: center; gap: 1.4rem; padding: 1rem 0 0.5rem; }
    .carousel-title { font-family: "Syne", sans-serif; font-size: clamp(1rem,2.5vw,1.4rem); font-weight: 800; color: var(--card-accent); letter-spacing: 0.18em; text-align: center; text-transform: uppercase; margin-bottom: 0.4rem; }
    .carousel-scene { width: 100%; height: 300px; perspective: 900px; display: flex; align-items: center; justify-content: center; margin-top: 5rem; }
    .carousel-track { width: 220px; height: 280px; position: relative; transform-style: preserve-3d; transition: transform 0.75s cubic-bezier(0.4,0,0.2,1); }
    .carousel-item { position: absolute; inset: 0; width: 220px; max-width: 250px; max-height: 260px; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); border-radius: 14px; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); overflow: hidden; display: flex; flex-direction: column; align-items: center; transition: border-color 1s ease, box-shadow 0.4s ease; cursor: pointer; }
    .carousel-item:hover { border-color: var(--card-accent); box-shadow: 0 0 22px var(--theme-color-dim); }
    .carousel-link { display: flex; flex-direction: column; width: 100%; height: 100%; text-decoration: none; }
    .carousel-link img { width: 100%; height: 195px; object-fit: contain; background: rgba(0,0,0,0.45); display: block; flex-shrink: 0; }
    .carousel-link .c-label { width: 100%; flex: 1; display: flex; align-items: center; justify-content: center; padding: 0.45rem 0.5rem; font-family: "Space Mono", monospace; font-size: 0.58rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: rgba(255,255,255,0.88); background: rgba(0,0,0,0.28); text-align: center; text-shadow: 0 1px 6px rgba(0,0,0,0.5); }

    /* TESTIMONIALS */
    .t-carousel-wrap { width: 100%; overflow: hidden; position: relative; }
    .t-carousel-track { display: flex; gap: 1.2rem; transition: transform 0.7s cubic-bezier(0.4,0,0.2,1); }
    .t-card { flex: 0 0 280px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15); border-radius: 16px; backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px); padding: 1.6rem 1.4rem 1.4rem; display: flex; flex-direction: column; gap: 0.85rem; transition: border-color 1s ease, box-shadow 0.3s ease; }
    .t-card:hover { border-color: var(--card-accent); box-shadow: 0 6px 28px rgba(0,0,0,0.3); }
    .t-stars { display: flex; gap: 3px; font-size: 1.1rem; }
    .t-star-filled { color: #fbbf24; text-shadow: 0 0 6px rgba(251,191,36,0.5); }
    .t-star-empty  { color: rgba(255,255,255,0.2); }
    .t-quote { font-family: "Syne", sans-serif; font-size: 0.88rem; color: rgba(255,255,255,0.82); line-height: 1.7; font-style: italic; }
    .t-author { display: flex; flex-direction: column; gap: 0.1rem; margin-top: auto; padding-top: 0.6rem; border-top: 1px solid rgba(255,255,255,0.08); }
    .t-name { font-family: "Space Mono", monospace; font-size: 0.72rem; font-weight: 700; color: var(--card-accent); letter-spacing: 0.08em; transition: color 1s ease; }
    .t-role { font-family: "Syne", sans-serif; font-size: 0.7rem; color: rgba(255,255,255,0.42); letter-spacing: 0.04em; }
    .t-dots { display: flex; gap: 0.5rem; justify-content: center; }
    .t-dot { width: 8px; height: 8px; border-radius: 50%; background: rgba(255,255,255,0.25); cursor: pointer; transition: background 0.3s ease, transform 0.3s ease; border: none; padding: 0; }
    .t-dot.active { background: var(--card-accent); transform: scale(1.3); }
    .add-testimony-btn { padding: 0.65rem 1.8rem; font-family: "Space Mono", monospace; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: #fff; background: transparent; border: 1px solid var(--card-accent); border-radius: 6px; cursor: pointer; transition: background 0.25s ease, box-shadow 0.25s ease, border-color 1s ease; }
    .add-testimony-btn:hover { background: rgba(255,255,255,0.08); box-shadow: 0 0 14px rgba(255,255,255,0.12); }
    @media (max-width: 600px) { .t-card { flex: 0 0 240px; } }

    /* POPOVER */
    .ts-popover { position: absolute; bottom: calc(100% + 12px); left: 50%; transform: translateX(-50%) translateY(8px); width: min(360px,90vw); background: rgba(10,10,28,0.97); border: 1px solid var(--card-accent); border-radius: 14px; padding: 1.4rem; display: flex; flex-direction: column; gap: 0.9rem; box-shadow: 0 12px 50px rgba(0,0,0,0.6); opacity: 0; pointer-events: none; transition: opacity 0.25s ease, transform 0.25s ease, border-color 1s ease; z-index: 150; }
    .ts-popover.open { opacity: 1; pointer-events: all; transform: translateX(-50%) translateY(0); }
    .ts-popover h3 { font-family: "Syne", sans-serif; font-size: 0.95rem; font-weight: 800; color: var(--card-accent); letter-spacing: 0.06em; transition: color 1s ease; }
    .ts-popover label { font-family: "Space Mono", monospace; font-size: 0.62rem; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.45); display: block; margin-bottom: 0.25rem; }
    .ts-popover input, .ts-popover textarea { width: 100%; background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.14); border-radius: 7px; padding: 0.5rem 0.75rem; color: #fff; font-family: "Syne", sans-serif; font-size: 0.84rem; outline: none; resize: vertical; transition: border-color 0.25s ease; }
    .ts-popover input:focus, .ts-popover textarea:focus { border-color: var(--card-accent); }
    .ts-star-pick { display: flex; gap: 6px; font-size: 1.35rem; cursor: pointer; }
    .ts-star-pick span { color: rgba(255,255,255,0.2); transition: color 0.15s, transform 0.15s; user-select: none; }
    .ts-star-pick span.lit { color: #fbbf24; transform: scale(1.2); text-shadow: 0 0 6px rgba(251,191,36,0.6); }
    .ts-popover-actions { display: flex; gap: 0.7rem; justify-content: flex-end; }
    .ts-popover-actions button { padding: 0.45rem 1.1rem; font-family: "Space Mono", monospace; font-size: 0.65rem; font-weight: 700; letter-spacing: 0.09em; text-transform: uppercase; border-radius: 6px; cursor: pointer; border: 1px solid rgba(255,255,255,0.18); background: transparent; color: rgba(255,255,255,0.55); transition: background 0.2s, color 0.2s; }
    .ts-popover-actions .ts-submit-btn { background: var(--card-accent); color: #000; border-color: var(--card-accent); font-weight: 800; transition: opacity 0.2s ease, background 1s ease, border-color 1s ease; }
    .ts-popover-actions .ts-submit-btn:hover { opacity: 0.82; }
    .ts-popover-actions .ts-cancel-btn:hover { background: rgba(255,255,255,0.08); color: #fff; }

    /* CONTACT */
    .contact-title { font-family: "Syne", sans-serif; font-size: clamp(2rem,6vw,4rem); font-weight: 800; color: #fff; letter-spacing: -0.02em; line-height: 1.1; text-shadow: 0 4px 32px rgba(0,0,0,0.4); text-align: center; width: 100%; }
    .contact-title span { color: var(--card-accent); transition: color 1s ease; }
    .contact-btn { padding: 1.1rem 3.2rem; font-family: "Syne", sans-serif; font-size: clamp(1rem,2.5vw,1.25rem); font-weight: 800; letter-spacing: 0.06em; text-transform: uppercase; color: #000; background: var(--card-accent); border: none; border-radius: 8px; cursor: pointer; text-decoration: none; display: inline-block; box-shadow: 0 6px 32px rgba(0,0,0,0.25); transition: background 1s ease, box-shadow 1s ease, transform 0.25s ease, opacity 0.25s ease; }
    .contact-btn:hover { opacity: 0.88; transform: translateY(-3px); box-shadow: 0 12px 48px rgba(0,0,0,0.35); }

    /* FOOTER */
    footer { position: relative; z-index: 1; background: rgba(0,0,0,0.55); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border-top: 1px solid var(--theme-color); box-shadow: 0 -4px 28px var(--theme-color-dim); padding: 3.5rem 2rem 1.5rem; transition: border-color 1s ease, box-shadow 1s ease; }
    .footer-inner { max-width: 960px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit,minmax(200px,1fr)); gap: 2.4rem 3rem; }
    .footer-col h4 { font-family: "Space Mono", monospace; font-size: 0.68rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--theme-color); margin-bottom: 1rem; transition: color 1s ease; }
    .footer-col p, .footer-col a { font-family: "Syne", sans-serif; font-size: 0.82rem; color: rgba(255,255,255,0.6); text-decoration: none; line-height: 1.9; display: block; transition: color 0.2s ease; }
    .footer-col a:hover { color: #fff; }
    .footer-socials { display: flex; gap: 0.85rem; flex-wrap: wrap; margin-top: 0.4rem; }
    .social-icon { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.25s ease, box-shadow 0.25s ease; border: 1px solid rgba(255,255,255,0.12); line-height: 0; }
    .social-icon svg { display: block; flex-shrink: 0; }
    .social-icon:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,0.4); }
    .si-facebook  { background: #1877f2; color: #fff; }
    .si-instagram { background: radial-gradient(circle at 30% 107%,#fdf497 0%,#fdf497 5%,#fd5949 45%,#d6249f 60%,#285aeb 90%); color: #fff; }
    .si-github    { background: #24292e; color: #fff; }
    .si-x         { background: #000; color: #fff; }
    .si-whatsapp  { background: #25d366; color: #fff; }
    .footer-bottom { max-width: 960px; margin: 2.4rem auto 0; padding-top: 1.2rem; border-top: 1px solid rgba(255,255,255,0.08); display: flex; align-items: center; justify-content: center; }
    .footer-bottom p { font-family: "Space Mono", monospace; font-size: 0.65rem; letter-spacing: 0.12em; color: rgba(255,255,255,0.3); text-align: center; }
    @media (max-width: 600px) { .footer-inner { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 400px) { .footer-inner { grid-template-columns: 1fr; } }
  </style>
</head>
<body>

  <div class="bg-video-wrapper">
    <video class="bg-video active" id="vid-lightback" src="lightback.mp4" autoplay muted loop playsinline></video>
    <video class="bg-video"        id="vid-darkback"  src="darkback.mp4"  autoplay muted loop playsinline></video>
    <video class="bg-video"        id="vid-warmback"  src="warmback.mp4"  autoplay muted loop playsinline></video>
    <video class="bg-video"        id="vid-coolback"  src="coolback.mp4"  autoplay muted loop playsinline></video>
    <video class="bg-video"        id="vid-hotback"   src="hotback.mp4"   autoplay muted loop playsinline></video>
  </div>
  <div class="bg-overlay"></div>

  <nav>
    <a href="#" class="logo">steveport v<sub>3</sub></a>
    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li class="nav-close-item">
        <button class="nav-close" id="navClose" aria-label="Close menu">&#10005;</button>
      </li>
      <li><a href="about.php">About</a></li>
      <li><a href="#contatln">Contacts</a></li>
      <li><a href="#themeCard2">Services</a></li>
      <li><a href="#themeCard3">Projects</a></li>
      <li><a href="resume.php">Resume</a></li>
      <li><a href="certification.php">Certifications</a></li>
      <li class="nav-mode">
        <a href="#" id="modeToggle" aria-haspopup="true" aria-expanded="false">&#9410;</a>
        <div class="theme-tooltip" id="themeTooltip"> Click to<br> change the site theme</div>
        <ul class="dropdown" id="modeDropdown">
          <li><a href="#" class="bg-trigger active-bg" data-vid="lightback">Lightback</a></li>
          <li><a href="#" class="bg-trigger" data-vid="darkback">Darkback</a></li>
          <li><a href="#" class="bg-trigger" data-vid="warmback">Warmback</a></li>
          <li><a href="#" class="bg-trigger" data-vid="coolback">Coolback</a></li>
          <li><a href="#" class="bg-trigger" data-vid="hotback">Hotback</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <section class="hero">

    <div class="theme-card theme-lightback" id="themeCard">
      <h1>Hey there, my name&#39;s Stephen.</h1>
      <hr>
      <p>I&#39;m a <b>Full-Stack Developer</b> with a passion for crafting premium, high-performance digital experiences from the ground up. I specialise in building scalable, production-ready applications using <b>JavaScript, HTML, CSS, PHP, Java, and Python</b> &mdash; turning complex problems into clean, elegant solutions that users love.</p>
    </div>

    <div class="theme-card theme-lightback theme-card--stat" id="themeCard2">
      <div class="stat-card">
        <h2>4+</h2>
        <span>years experience</span>
      </div>
      <hr style="width:100%;border:none;border-top:1px solid rgba(255,255,255,0.1);margin:1.2rem 0;">
      <h1 class="skills-title">MY SKILLS</h1>
      <div class="skills-cross">
        <div class="skill-card"><img src="phpfile.jpg" alt="PHP"><span class="skill-label">PHP Development</span></div>
        <div class="skill-card"><img src="javafile.jpg" alt="Java"><span class="skill-label">Java Development</span></div>
        <div class="skill-card"><img src="html_css.jpg" alt="HTML &amp; CSS"><span class="skill-label">HTML &amp; CSS (Web Development)</span></div>
        <div class="skill-card"><img src="jsfile.jpg" alt="JavaScript"><span class="skill-label">JavaScript Development</span></div>
        <div class="skill-card"><img src="pythonfile.jpg" alt="Python"><span class="skill-label">Python Development</span></div>
      </div>
    </div>

    <div class="theme-card theme-lightback theme-card--stat" id="themeCard3">
      <div class="carousel-container">
        <h2 class="carousel-title">My Projects</h2>
        <div class="carousel-scene">
          <div class="carousel-track" id="carouselTrack">
            <div class="carousel-item"><a href="https://stevecreatorpro.github.io/burger-town" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="bt.jpg" alt="Fastfood Website"><span class="c-label">Fastfood Website</span></a></div>
            <div class="carousel-item"><a href="https://stevecreatorpro.github.io/abuja-continental" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="abcon.png" alt="Hotel Website"><span class="c-label">Hotel Website</span></a></div>
            <div class="carousel-item"><a href="https://fashionweb.ihostfull.com" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="Shot 0001.png" alt="Fashion Website"><span class="c-label">Fashion Website</span></a></div>
            <div class="carousel-item"><a href="https://restaurantweb.ihostfull.com" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="mm.jpg" alt="Restaurant Website"><span class="c-label">Restaurant Website</span></a></div>
            <div class="carousel-item"><a href="https://gamer-globe.ihostfull.com" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="gamingweb.jpg" alt="Gaming Website"><span class="c-label">Gaming Website</span></a></div>
            <div class="carousel-item"><a href="https://stevecreatorpro.github.io/fraser-suites-abuja" target="_blank" class="carousel-link" rel="noopener noreferrer"><img src="fs.jpg" alt="Luxury suites Website"><span class="c-label">Luxury suites Website</span></a></div>
          </div> 
        </div>
      </div>
    </div>

  </section>

  <section style="position:relative;z-index:1;padding:3rem 2rem 4rem;display:flex;justify-content:center;">
    <div class="theme-card theme-lightback theme-card--stat" id="themeCard4" style="width:min(820px,92vw);">
      <h2 class="carousel-title" style="letter-spacing:0.18em;width:100%;text-align:center;">What Clients Say</h2>
      <div class="t-carousel-wrap">
        <div class="t-carousel-track" id="tTrack">
          <div class="t-card">
            <div class="t-stars"><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span></div>
            <p class="t-quote">"Stephen delivered our company website ahead of schedule and beyond expectations. The attention to detail and clean code structure made our launch seamless. Highly recommend."</p>
            <div class="t-author"><span class="t-name">Marcus O. Williams</span><span class="t-role">CEO, Bridgepoint Ventures</span></div>
          </div>
          <div class="t-card">
            <div class="t-stars"><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span></div>
            <p class="t-quote">"Absolutely loved working with Stephen. He took my vague brief and turned it into a stunning portfolio that&#39;s already getting me freelance inquiries. 10/10."</p>
            <div class="t-author"><span class="t-name">Amara Nwosu</span><span class="t-role">Graphic Designer &amp; Illustrator</span></div>
          </div>
          <div class="t-card">
            <div class="t-stars"><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-empty">&#9733;</span></div>
            <p class="t-quote">"Our e-commerce sales page saw a 40% conversion lift after the redesign. Stephen clearly understands both design and business. Communication throughout was excellent."</p>
            <div class="t-author"><span class="t-name">Daniel Kowalski</span><span class="t-role">Founder, NovaByte Shop</span></div>
          </div>
          <div class="t-card">
            <div class="t-stars"><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span></div>
            <p class="t-quote">"The fashion website Stephen built for our brand is exactly the aesthetic we were going for &mdash; elegant, fast, and responsive. Clients keep complimenting it."</p>
            <div class="t-author"><span class="t-name">Isabelle Fontaine</span><span class="t-role">Creative Director, Maison &Eacute;lite</span></div>
          </div>
          <div class="t-card">
            <div class="t-stars"><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span><span class="t-star-filled">&#9733;</span></div>
            <p class="t-quote">"Reliable, skilled, and a great communicator. Stephen built a full-stack solution for our gaming platform from scratch. The backend is rock solid and the UI is slick."</p>
            <div class="t-author"><span class="t-name">Rayan Al-Farsi</span><span class="t-role">Co-Founder, PixelArena Studios</span></div>
          </div>
        </div>
      </div>
      <div class="t-dots" id="tDots"></div>
      <div style="position:relative;display:inline-block;align-self:center;">
        <button class="add-testimony-btn" id="openTestimonyModal">+ Add Your Testimony</button>
        <div class="ts-popover" id="tPopover">
          <h3>Share Your Experience</h3>
          <div><label>Your Name</label><input type="text" id="tName" placeholder="e.g. Jane Smith" maxlength="60"></div>
          <div><label>Your Role / Company</label><input type="text" id="tRole" placeholder="e.g. CEO, Acme Corp" maxlength="70"></div>
          <div><label>Your Testimony</label><textarea id="tMessage" rows="3" placeholder="Tell others about your experience..." maxlength="320"></textarea></div>
          <div>
            <label>Rating</label>
            <div class="ts-star-pick" id="starPicker">
              <span data-val="1">&#9733;</span><span data-val="2">&#9733;</span><span data-val="3">&#9733;</span><span data-val="4">&#9733;</span><span data-val="5">&#9733;</span>
            </div>
          </div>
          <div class="ts-popover-actions">
            <button class="ts-cancel-btn" id="closeTestimonyModal">Cancel</button>
            <button class="ts-submit-btn" id="submitTestimony">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="position:relative;z-index:1;padding:3rem 2rem 5rem;display:flex;justify-content:center;">
    <div class="theme-card theme-lightback theme-card--stat" id="themeCard5" style="width:min(820px,92vw);gap:2rem;align-items:center;">
      <h1 class="contact-title" style="white-space:normal;font-size:clamp(1.6rem,4vw,2.8rem);text-align:center;width:100%;">Contact <span>Me Now</span></h1>
      <a href="mailto:codekingdomv1@gmail.com" class="contact-btn">Get In Touch Now</a>
    </div>
  </section>

  <footer>
    <div class="footer-inner">
      <div class="footer-col">
        <h4>Steveport v3</h4>
        <p>Full-stack developer crafting premium, scalable digital experiences with clean code and bold design.</p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <a href="about.php">About</a></li>
      <a href="#contatln">Contacts</a></li>
      <a href="#themeCard2">Services</a></li>
      <a href="#themeCard3">Projects</a></li>
      <a href="resume.php">Resume</a></li>
      <a href="certification.php">Certifications</a>
      </div>
      <div class="footer-col" id="contatln">
        <h4>Contact</h4>
        <a href="mailto:codekingdomv1@gmail.com">codekingdomv1@gmail.com</a>
        <a href="tel:+2347025114566">+234 702 511 4566</a>
        <a href="tel:+2349129282568">+234 912 928 2568</a>
        <a href="#">Available for Freelance</a>
      </div>
      <div class="footer-col">
        <h4>Find Me Online</h4>
        <div class="footer-socials">
          <a href="https://facebook.com/placeholder" target="_blank" class="social-icon si-facebook" title="Facebook">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="https://instagram.com/placeholder" target="_blank" class="social-icon si-instagram" title="Instagram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path fill="white" d="M12 7a5 5 0 1 0 0 10A5 5 0 0 0 12 7zm0 8a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm5.2-8.8a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4z"/></svg>
          </a>
          <a href="https://github.com/placeholder" target="_blank" class="social-icon si-github" title="GitHub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
          </a>
          <a href="https://x.com/placeholder" target="_blank" class="social-icon si-x" title="X (Twitter)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L1.255 2.25H8.08l4.261 5.636 5.9-5.636zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="https://wa.me/2347025114566" target="_blank" class="social-icon si-whatsapp" title="WhatsApp">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; Steveport v3 2026 &nbsp;&middot;&nbsp; All rights reserved &nbsp;&middot;&nbsp; Built by Stephen</p>
    </div>
  </footer>

  <script>
    /* ── HAMBURGER ── */
    var hamburger = document.getElementById('hamburger');
    var navLinks  = document.getElementById('navLinks');
    var navClose  = document.getElementById('navClose');

    hamburger.addEventListener('click', function() {
      hamburger.classList.toggle('open');
      navLinks.classList.toggle('open');
    });

    navClose.addEventListener('click', function() {
      hamburger.classList.remove('open');
      navLinks.classList.remove('open');
    });

    navLinks.querySelectorAll('a:not(#modeToggle):not(.bg-trigger)').forEach(function(a) {
      a.addEventListener('click', function() {
        hamburger.classList.remove('open');
        navLinks.classList.remove('open');
      });
    });

    /* ── MODE DROPDOWN ── */
    var modeToggle   = document.getElementById('modeToggle');
    var modeDropdown = document.getElementById('modeDropdown');
    var themeTooltip = document.getElementById('themeTooltip');

    /* Auto-hide tooltip after 5 seconds */
    setTimeout(function() {
      themeTooltip.classList.add('hide');
      setTimeout(function() { themeTooltip.style.display = 'none'; }, 600);
    }, 5000);

    /* Also hide immediately when user clicks the Ⓜ button */
    modeToggle.addEventListener('click', function() {
      themeTooltip.classList.add('hide');
      setTimeout(function() { themeTooltip.style.display = 'none'; }, 600);
    });

    modeToggle.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      var isOpen = modeDropdown.classList.toggle('open');
      modeToggle.setAttribute('aria-expanded', isOpen);
    });

    document.addEventListener('click', function(e) {
      if (!modeToggle.contains(e.target) && !modeDropdown.contains(e.target)) {
        modeDropdown.classList.remove('open');
        modeToggle.setAttribute('aria-expanded', 'false');
      }
    });

    /* ── VIDEO / THEME SWITCHER ── */
    var triggers   = document.querySelectorAll('.bg-trigger');
    var themeCards = [
      document.getElementById('themeCard'),
      document.getElementById('themeCard2'),
      document.getElementById('themeCard3'),
      document.getElementById('themeCard4'),
      document.getElementById('themeCard5')
    ];
    var current = 'lightback';

    var themeColors = {
      lightback: { color: 'rgba(255,255,255,0.95)',  dim: 'rgba(255,255,255,0.30)' },
      darkback:  { color: 'rgba(130,130,220,0.85)',  dim: 'rgba(130,130,220,0.35)' },
      warmback:  { color: 'rgba(255,175,70,0.95)',   dim: 'rgba(255,175,70,0.35)'  },
      coolback:  { color: 'rgba(70,200,240,0.95)',   dim: 'rgba(70,200,240,0.35)'  },
      hotback:   { color: 'rgba(255,90,55,0.95)',    dim: 'rgba(255,90,55,0.35)'   }
    };

    function applyThemeColor(name) {
      var t = themeColors[name];
      if (!t) return;
      document.documentElement.style.setProperty('--theme-color', t.color);
      document.documentElement.style.setProperty('--theme-color-dim', t.dim);
    }

    function switchBackground(name) {
      if (name === current) return;
      var nextVid = document.getElementById('vid-' + name);
      var prevVid = document.getElementById('vid-' + current);
      if (!nextVid) return;
      nextVid.classList.add('active');
      prevVid.classList.remove('active');
      applyThemeColor(name);
      themeCards.forEach(function(c) { c.style.opacity = '0'; });
      setTimeout(function() {
        themeCards.forEach(function(c) {
          c.classList.remove('theme-' + current);
          c.classList.add('theme-' + name);
          c.style.opacity = '1';
        });
      }, 350);
      triggers.forEach(function(t) {
        t.classList.toggle('active-bg', t.dataset.vid === name);
      });
      current = name;
      modeDropdown.classList.remove('open');
      modeToggle.setAttribute('aria-expanded', 'false');
    }

    triggers.forEach(function(trigger) {
      trigger.addEventListener('click', function(e) {
        e.preventDefault();
        switchBackground(trigger.dataset.vid);
      });
    });

    /* ── 3D PROJECT CAROUSEL ── */
    (function() {
      var track     = document.getElementById('carouselTrack');
      var items     = Array.prototype.slice.call(track.querySelectorAll('.carousel-item'));
      var total     = items.length;
      var angleStep = 360 / total;
      var radius    = 320;
      var angle     = 0;

      items.forEach(function(item, i) {
        item.style.transform = 'rotateY(' + (angleStep * i) + 'deg) translateZ(' + radius + 'px)';
      });
      track.style.transform = 'rotateY(0deg)';

      setInterval(function() {
        angle += angleStep;
        track.style.transform = 'rotateY(' + (-angle) + 'deg)';
      }, 2800);

      var touchX = 0;
      track.addEventListener('touchstart', function(e) {
        touchX = e.touches[0].clientX;
      }, { passive: true });
      track.addEventListener('touchend', function(e) {
        var dx = e.changedTouches[0].clientX - touchX;
        if (Math.abs(dx) > 40) {
          angle += dx < 0 ? angleStep : -angleStep;
          track.style.transform = 'rotateY(' + (-angle) + 'deg)';
        }
      }, { passive: true });
    })();

    /* ── TESTIMONIAL SLIDER ── */
    (function() {
      var track    = document.getElementById('tTrack');
      var dotsWrap = document.getElementById('tDots');
      var CARD_W   = 316;
      var idx      = 0;
      var autoTimer;

      function cards() { return track.querySelectorAll('.t-card'); }

      function buildDots() {
        dotsWrap.innerHTML = '';
        var all = cards();
        for (var i = 0; i < all.length; i++) {
          (function(i) {
            var d = document.createElement('button');
            d.className = 't-dot' + (i === idx ? ' active' : '');
            d.addEventListener('click', function() { goTo(i); resetAuto(); });
            dotsWrap.appendChild(d);
          })(i);
        }
      }

      function goTo(i) {
        var len = cards().length;
        idx = Math.max(0, Math.min(i, len - 1));
        track.style.transform = 'translateX(' + (-CARD_W * idx) + 'px)';
        var dots = dotsWrap.querySelectorAll('.t-dot');
        dots.forEach(function(d, j) { d.classList.toggle('active', j === idx); });
      }

      function resetAuto() {
        clearInterval(autoTimer);
        autoTimer = setInterval(function() {
          goTo((idx + 1) % cards().length);
        }, 3500);
      }

      buildDots();
      resetAuto();

      /* POPOVER */
      var addBtn    = document.getElementById('openTestimonyModal');
      var popover   = document.getElementById('tPopover');
      var cancelBtn = document.getElementById('closeTestimonyModal');
      var submitBtn = document.getElementById('submitTestimony');
      var picker    = document.getElementById('starPicker');
      var pStars    = picker.querySelectorAll('span');
      var rating    = 0;

      addBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        popover.classList.toggle('open');
      });

      cancelBtn.addEventListener('click', function() {
        popover.classList.remove('open');
      });

      document.addEventListener('click', function(e) {
        if (!popover.contains(e.target) && e.target !== addBtn) {
          popover.classList.remove('open');
        }
      });

      pStars.forEach(function(s) {
        s.addEventListener('mouseover', function() {
          var v = parseInt(s.dataset.val);
          pStars.forEach(function(x) { x.classList.toggle('lit', parseInt(x.dataset.val) <= v); });
        });
        s.addEventListener('click', function() { rating = parseInt(s.dataset.val); });
      });

      picker.addEventListener('mouseleave', function() {
        pStars.forEach(function(x) { x.classList.toggle('lit', parseInt(x.dataset.val) <= rating); });
      });

      submitBtn.addEventListener('click', function() {
        var name = document.getElementById('tName').value.trim();
        var role = document.getElementById('tRole').value.trim();
        var msg  = document.getElementById('tMessage').value.trim();
        if (!name || !msg || rating === 0) {
          alert('Please fill in your name, testimony, and select a rating.');
          return;
        }
        var sh = '';
        for (var i = 1; i <= 5; i++) {
          sh += '<span class="' + (i <= rating ? 't-star-filled' : 't-star-empty') + '">&#9733;</span>';
        }
        var card = document.createElement('div');
        card.className = 't-card';
        card.innerHTML =
          '<div class="t-stars">' + sh + '</div>' +
          '<p class="t-quote">"' + msg + '"</p>' +
          '<div class="t-author">' +
            '<span class="t-name">' + name + '</span>' +
            '<span class="t-role">' + (role || 'Valued Client') + '</span>' +
          '</div>';
        track.appendChild(card);
        buildDots();
        goTo(cards().length - 1);
        resetAuto();
        document.getElementById('tName').value    = '';
        document.getElementById('tRole').value    = '';
        document.getElementById('tMessage').value = '';
        rating = 0;
        pStars.forEach(function(x) { x.classList.remove('lit'); });
        popover.classList.remove('open');
      });
    })();
  </script>

</body>
</html>
