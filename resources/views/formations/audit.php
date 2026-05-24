<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Diagnostic Travaux 1h30 — Les Secrets du Peintre</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>

    :root {
      --ocre:   #C9A84C;
      --ocre-l: #E8C97A;
      --ocre-b: rgba(201,168,76,0.28);
      --noir:   #111111;
      --anth:   #14181d;
      --gris:   #888;
      --creme:  #F8F5EE;
      --creme2: #F0EDE4;
      --border: #e8e4da;
      --blanc:  #ffffff;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background: var(--creme); color: var(--noir); overflow-x: hidden; }

    /* ── HEADER ── */
    header {
      position: fixed; top:0; left:0; right:0; z-index:100;
      height:80px; display:flex; align-items:center; justify-content:space-between;
      padding:0 60px; background:var(--creme); border-bottom:1px solid rgba(0,0,0,.09);
    }
    .logo { display:flex; align-items:center; gap:14px; text-decoration:none; }
    .logo-icon {
      width:46px; height:46px; background:var(--anth); border-radius:4px;
      display:flex; align-items:center; justify-content:center;
      font-family:'Cormorant Garamond',serif; font-size:20px; font-weight:700; color:var(--ocre);
    }
    .logo-text { font-family:'Cormorant Garamond',serif; font-size:20px; font-weight:700; color:var(--noir); line-height:1.1; }
    .logo-sub  { font-size:10px; color:var(--gris); letter-spacing:3px; text-transform:uppercase; display:block; }
    nav { display:flex; align-items:center; gap:36px; }
    nav a { color:var(--anth); text-decoration:none; font-size:12px; letter-spacing:2px; text-transform:uppercase; font-weight:500; }
    .btn-nav { background:var(--anth)!important; color:var(--creme)!important; padding:11px 26px; border-radius:2px; font-weight:600!important; }

    /* ── HERO ── */
    .hero {
      margin-top:80px;
      min-height:86vh;
      background:var(--anth);
      display:grid;
      grid-template-columns:1fr 1fr;
      position:relative;
      overflow:hidden;
    }
    /* grain texture */
    .hero::before {
      content:''; position:absolute; inset:0; pointer-events:none; z-index:0;
      background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='400' height='400' filter='url(%23n)' opacity='0.055'/%3E%3C/svg%3E");
      background-size:400px;
    }
    /* halo ocre droit */
    .hero::after {
      content:''; position:absolute; top:-80px; right:-100px;
      width:600px; height:600px; border-radius:50%;
      background:radial-gradient(circle, rgba(201,168,76,.06) 0%, transparent 65%);
      pointer-events:none; z-index:0;
    }

    /* colonne gauche */
    .hero-left {
      position:relative; z-index:1;
      padding:90px 56px 90px 60px;
      display:flex; flex-direction:column; justify-content:center; gap:30px;
    }

    .breadcrumb {
      display:flex; align-items:center; gap:8px;
      font-size:10.5px; letter-spacing:2px; text-transform:uppercase;
      color:rgba(201,168,76,.45);
    }
    .breadcrumb a { color:inherit; text-decoration:none; transition:color .2s; }
    .breadcrumb a:hover { color:var(--ocre); }
    .breadcrumb i { font-size:8px; opacity:.35; }

    .hero-tag {
      display:inline-flex; align-items:center; gap:12px;
      font-size:10.5px; letter-spacing:3.5px; text-transform:uppercase;
      color:var(--ocre); font-weight:600;
    }
    .hero-tag::before { content:''; width:28px; height:1px; background:var(--ocre); }

    .hero-left h1 {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(42px,5.5vw,74px);
      font-weight:700; line-height:1.0; color:var(--creme);
    }
    .hero-left h1 em { font-style:italic; color:var(--ocre); display:block; }

    .hero-sub {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(16px,1.8vw,20px);
      font-style:italic; color:rgba(248,245,238,.5);
      line-height:1.55; max-width:440px;
    }

    .hero-badges { display:flex; flex-wrap:wrap; gap:10px; }
    .badge {
      display:inline-flex; align-items:center; gap:8px;
      font-size:10.5px; font-weight:600; letter-spacing:1.5px; text-transform:uppercase;
      color:var(--ocre); background:rgba(201,168,76,.08);
      border:1px solid var(--ocre-b); padding:8px 14px; border-radius:2px;
    }
    .badge i { font-size:9px; }

    .hero-ctas { display:flex; gap:14px; padding-top:8px; }
    .btn-ocre {
      display:inline-flex; align-items:center; gap:10px;
      background:var(--ocre); color:var(--noir);
      padding:15px 32px; border-radius:2px;
      font-size:11px; font-weight:700; letter-spacing:2px; text-transform:uppercase;
      text-decoration:none; border:2px solid var(--ocre); transition:all .3s;
    }
    .btn-ocre:hover { background:var(--ocre-l); border-color:var(--ocre-l); transform:translateY(-2px); box-shadow:0 8px 28px rgba(201,168,76,.35); }
    .btn-ghost-w {
      display:inline-flex; align-items:center; gap:10px;
      background:transparent; color:var(--creme);
      padding:14px 32px; border-radius:2px;
      border:1px solid rgba(248,245,238,.22);
      font-size:11px; font-weight:500; letter-spacing:2px; text-transform:uppercase;
      text-decoration:none; transition:all .3s;
    }
    .btn-ghost-w:hover { border-color:var(--ocre); color:var(--ocre); }

    /* colonne droite — image */
    .hero-picture {
      position:relative; z-index:1;
      background: url('storage/picture.jpeg') center/cover no-repeat;
      /* fallback si pas d'image */
      background-color: #1c2028;
    }
    /* overlay dégradé pour fondu avec la gauche */
    .hero-picture::before {
      content:''; position:absolute; inset:0;
      background:linear-gradient(90deg, var(--anth) 0%, transparent 35%);
    }
    /* ligne déco verticale séparatrice */
    .hero-picture::after {
      content:''; position:absolute; left:0; top:15%; bottom:15%;
      width:1px;
      background:linear-gradient(to bottom, transparent, rgba(201,168,76,.25) 30%, rgba(201,168,76,.25) 70%, transparent);
    }

    /* barre dorée bas du hero */
    .hero-bar {
      position:absolute; bottom:0; left:0; right:0; height:3px; z-index:2;
      background:linear-gradient(90deg, transparent, var(--ocre) 30%, var(--ocre-l) 50%, var(--ocre) 70%, transparent);
      opacity:.65;
    }

    /* ── INTRO ── */
    .section-intro {
      padding:90px 60px; background:var(--blanc);
      display:grid; grid-template-columns:1fr 2fr; gap:80px; align-items:start;
    }
    .intro-left { position:sticky; top:100px; }
    .section-eyebrow {
      font-size:10.5px; letter-spacing:3.5px; text-transform:uppercase;
      color:var(--ocre); font-weight:600;
      display:flex; align-items:center; gap:12px; margin-bottom:16px;
    }
    .section-eyebrow::before { content:''; width:24px; height:1px; background:var(--ocre); }
    .intro-left h2 {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(26px,3vw,40px); font-weight:700; color:var(--noir); line-height:1.1; margin-bottom:16px;
    }
    .intro-left p { font-size:.875rem; line-height:1.8; color:var(--gris); }
    .intro-lead {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(20px,2.2vw,27px); font-weight:600; line-height:1.5; color:var(--noir);
      margin-bottom:28px; padding-bottom:28px; border-bottom:1px solid var(--border);
    }
    .intro-body { font-size:.95rem; line-height:1.9; color:#555; }

    /* ── DÉROULEMENT ── */
    .section-deroulement {
      background:var(--anth); padding:90px 60px;
      position:relative; overflow:hidden;
    }
    .section-deroulement::before {
      content:''; position:absolute; inset:0; pointer-events:none;
      background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
      background-size:300px;
    }
    .section-deroulement::after {
      content:''; position:absolute; bottom:-80px; right:-80px;
      width:400px; height:400px; border-radius:50%;
      background:radial-gradient(circle,rgba(201,168,76,.06) 0%,transparent 70%);
      pointer-events:none;
    }
    .der-inner { position:relative; z-index:1; }
    .section-title-light {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(30px,4vw,52px); font-weight:700; color:var(--creme); line-height:1.08;
      margin-bottom:56px;
    }
    .section-title-light em { font-style:italic; color:var(--ocre); }

    .steps { display:flex; flex-direction:column; gap:3px; }
    .step {
      display:grid; grid-template-columns:80px 1fr;
      background:rgba(255,255,255,.03); border:1px solid rgba(255,255,255,.05);
      transition:background .3s, border-color .3s; cursor:default;
    }
    .step:hover { background:rgba(201,168,76,.05); border-color:rgba(201,168,76,.18); }
    .step-num-col {
      display:flex; align-items:center; justify-content:center;
      border-right:1px solid rgba(255,255,255,.05); padding:28px 0;
    }
    .step-num {
      font-family:'Cormorant Garamond',serif; font-size:2.8rem; font-weight:700;
      color:rgba(201,168,76,.2); line-height:1; transition:color .3s;
    }
    .step:hover .step-num { color:rgba(201,168,76,.45); }
    .step-body { padding:28px 32px; display:flex; flex-direction:column; gap:8px; }
    .step-title { font-size:.95rem; font-weight:600; color:var(--creme); display:flex; align-items:center; gap:10px; }
    .step-title i { color:var(--ocre); font-size:.85rem; }
    .step-desc  { font-size:.83rem; line-height:1.7; color:rgba(248,245,238,.45); }

    /* ── BÉNÉFICES + FORMAT ── */
    .section-split {
      padding:90px 60px; background:var(--creme);
      display:grid; grid-template-columns:1fr 1fr; gap:3px;
    }
    .split-block {
      background:var(--blanc); border:1px solid var(--border);
      padding:52px 44px; display:flex; flex-direction:column; gap:24px;
      position:relative; overflow:hidden; transition:transform .3s;
    }
    .split-block::before {
      content:''; position:absolute; top:0; left:0; right:0; height:3px;
      background:var(--ocre); transform:scaleX(0); transform-origin:left;
      transition:transform .4s cubic-bezier(.4,0,.2,1);
    }
    .split-block:hover::before { transform:scaleX(1); }
    .split-block:hover { transform:translateY(-4px); box-shadow:0 16px 48px rgba(0,0,0,.07); }
    .split-icon {
      width:52px; height:52px; background:var(--anth); border-radius:10px;
      display:flex; align-items:center; justify-content:center;
      color:var(--ocre); font-size:1.3rem; transition:background .3s;
    }
    .split-block:hover .split-icon { background:var(--ocre); color:var(--noir); }
    .split-block h3 {
      font-family:'Cormorant Garamond',serif; font-size:1.5rem; font-weight:700; color:var(--noir);
    }
    .split-list { list-style:none; display:flex; flex-direction:column; gap:11px; }
    .split-list li {
      display:flex; align-items:flex-start; gap:12px;
      font-size:.875rem; line-height:1.65; color:#555;
    }
    .split-list li i { color:var(--ocre); font-size:.78rem; flex-shrink:0; margin-top:3px; transition:transform .25s; }
    .split-block:hover .split-list li i { transform:translateX(3px); }

    .format-items { display:flex; flex-direction:column; gap:12px; }
    .format-item {
      display:flex; align-items:center; gap:16px;
      padding:14px 18px; background:var(--creme);
      border:1px solid var(--border); border-left:3px solid var(--ocre);
      border-radius:0 6px 6px 0;
    }
    .format-item i { color:var(--ocre); font-size:1.05rem; width:20px; text-align:center; flex-shrink:0; }
    .fi-label { font-size:9px; letter-spacing:2px; text-transform:uppercase; color:var(--gris); font-weight:600; display:block; margin-bottom:2px; }
    .fi-value { font-size:.88rem; font-weight:600; color:var(--noir); }

    /* ── FEUILLE DE ROUTE ── */
    .section-feuille {
      position:relative; min-height:340px;
      display:flex; align-items:center; justify-content:center;
      text-align:center; overflow:hidden; background:var(--anth);
    }
    .feuille-bg {
      position:absolute; inset:0;
      background:
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='500'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='500' height='500' filter='url(%23n)' opacity='0.08'/%3E%3C/svg%3E"),
        linear-gradient(150deg,#0d1117 0%,#1c1408 45%,#0d1117 100%);
      background-size:500px 500px,cover;
    }
    .feuille-glow {
      position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
      width:600px; height:350px;
      background:radial-gradient(ellipse,rgba(201,168,76,.07) 0%,transparent 70%);
    }
    .feuille-bar-t,.feuille-bar-b {
      position:absolute; left:0; right:0; height:2px;
      background:linear-gradient(90deg,transparent,rgba(201,168,76,.4) 30%,rgba(201,168,76,.55) 50%,rgba(201,168,76,.4) 70%,transparent);
    }
    .feuille-bar-t { top:0; } .feuille-bar-b { bottom:0; }
    .feuille-inner { position:relative; z-index:2; padding:80px 60px; max-width:700px; }
    .feuille-tag {
      display:inline-flex; align-items:center; gap:14px;
      font-size:10px; letter-spacing:4px; text-transform:uppercase;
      color:var(--ocre); font-weight:600; margin-bottom:24px;
    }
    .feuille-tag::before,.feuille-tag::after { content:''; display:block; width:22px; height:1px; background:rgba(201,168,76,.5); }
    .feuille-line { width:56px; height:2px; background:linear-gradient(90deg,var(--ocre),var(--ocre-l)); margin:0 auto 28px; border-radius:2px; }
    .feuille-inner h2 {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(26px,3.5vw,44px); font-weight:700; line-height:1.15; color:var(--creme); margin-bottom:18px;
    }
    .feuille-inner h2 em { font-style:italic; color:var(--ocre); }
    .feuille-inner p { font-size:.95rem; line-height:1.8; color:rgba(248,245,238,.55); margin-bottom:36px; }

    /* ── CTA FINAL ── */
    .section-cta {
      padding:80px 60px; background:var(--blanc);
      display:flex; align-items:center; justify-content:space-between;
      gap:40px; flex-wrap:wrap; border-top:1px solid var(--border);
    }
    .cta-left h3 {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(24px,3vw,38px); font-weight:700; color:var(--noir); line-height:1.15; margin-bottom:10px;
    }
    .cta-left h3 em { font-style:italic; color:var(--ocre); }
    .cta-left p { font-size:.88rem; color:var(--gris); line-height:1.7; }
    .cta-right { display:flex; gap:14px; align-items:center; flex-wrap:wrap; }
    .btn-primary {
      display:inline-flex; align-items:center; gap:8px;
      background:var(--anth); color:var(--creme);
      padding:16px 34px; border-radius:2px;
      font-size:11px; font-weight:600; letter-spacing:2px; text-transform:uppercase;
      text-decoration:none; position:relative; overflow:hidden; transition:color .35s,box-shadow .35s;
    }
    .btn-primary::before {
      content:''; position:absolute; inset:0; background:var(--ocre);
      transform:translateX(-100%); transition:transform .4s cubic-bezier(.4,0,.2,1); z-index:0;
    }
    .btn-primary:hover { color:var(--noir); box-shadow:0 8px 30px rgba(201,168,76,.3); }
    .btn-primary:hover::before { transform:translateX(0); }
    .btn-primary span,.btn-primary i { position:relative; z-index:1; }
    .btn-ghost-d {
      display:inline-flex; align-items:center; gap:8px;
      background:transparent; color:var(--anth);
      padding:14px 30px; border-radius:2px; border:1.5px solid var(--border);
      font-size:11px; font-weight:500; letter-spacing:2px; text-transform:uppercase;
      text-decoration:none; transition:border-color .3s,color .3s;
    }
    .btn-ghost-d:hover { border-color:var(--ocre); color:var(--ocre); }

    /* ── FOOTER ── */
    footer { background:var(--anth); border-top:1px solid rgba(255,255,255,.05); }
    .footer-main { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:56px; padding:72px 60px 56px; }
    .footer-desc { font-size:13px; line-height:1.8; color:rgba(248,245,238,.45); margin-top:18px; max-width:250px; }
    .footer-col h4 { font-size:10px; letter-spacing:3px; text-transform:uppercase; color:var(--ocre); margin-bottom:18px; font-weight:600; }
    .footer-col a  { display:block; color:rgba(248,245,238,.45); text-decoration:none; font-size:13px; margin-bottom:9px; transition:color .2s; }
    .footer-col a:hover { color:var(--creme); }
    .footer-bottom { padding:20px 60px; border-top:1px solid rgba(255,255,255,.07); display:flex; justify-content:space-between; align-items:center; }
    .footer-bottom p { font-size:12px; color:rgba(248,245,238,.3); }
    .footer-legal { display:flex; gap:24px; }
    .footer-legal a { font-size:12px; color:rgba(248,245,238,.3); text-decoration:none; transition:color .2s; }
    .footer-legal a:hover { color:var(--ocre); }

    /* ── SCROLL REVEAL ── */
    .reveal { opacity:0; transform:translateY(24px); transition:opacity .7s ease,transform .7s ease; }
    .reveal.visible { opacity:1; transform:translateY(0); }
    .reveal.d1 { transition-delay:.1s; } .reveal.d2 { transition-delay:.2s; }

    @keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
    .hero-tag     { animation:fadeUp .6s .1s ease both; }
    .hero-left h1 { animation:fadeUp .7s .2s ease both; }
    .hero-sub     { animation:fadeUp .7s .3s ease both; }
    .hero-badges  { animation:fadeUp .7s .4s ease both; }
    .hero-ctas    { animation:fadeUp .7s .5s ease both; }

    /* ── RESPONSIVE ── */
    @media(max-width:960px){
      header { padding:0 20px; }
      .hero  { grid-template-columns:1fr; min-height:auto; }
      .hero-left { padding:60px 24px; }
      .hero-picture { min-height:280px; }
      .section-intro { grid-template-columns:1fr; padding:60px 24px; gap:36px; }
      .intro-left { position:static; }
      .section-deroulement { padding:60px 24px; }
      .section-split { grid-template-columns:1fr; padding:24px; }
      .split-block { padding:36px 28px; }
      .feuille-inner { padding:60px 24px; }
      .section-cta { padding:60px 24px; flex-direction:column; }
      .footer-main { grid-template-columns:1fr 1fr; gap:32px; padding:48px 24px; }
      .footer-bottom { flex-direction:column; gap:12px; padding:20px 24px; text-align:center; }
      .footer-legal { flex-wrap:wrap; justify-content:center; }
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header>
  <a href="/" class="logo">
    <div class="logo-icon">AP</div>
    <div class="logo-text">Les secrets du peintre<span class="logo-sub">Formations & Réalisations</span></div>
  </a>
  <nav>
    <a href="/">Accueil</a>
    <a href="/contact">Contact</a>
    <a href="/boutique" class="btn-nav">Boutique</a>
  </nav>
</header>


<!-- ══════ HERO ══════ -->
<section class="hero">
  <div class="hero-bar"></div>

  <!-- Gauche : texte -->
  <div class="hero-left">

    <nav class="breadcrumb" aria-label="Fil d'Ariane">
      <a href="/">Accueil</a>
      <span style="opacity:.35;">/</span>
      <a href="/formations">Formations</a>
      <span style="opacity:.35;">/</span>
      <span style="color:rgba(201,168,76,.7);">Diagnostic travaux</span>
    </nav>

    <div class="hero-tag">Audit &amp; Conseil Travaux</div>

    <h1>Audit / Conseil Travaux<br><em>1h30</em></h1>

    <p class="hero-sub">Spécial rénovation intérieure — peinture &amp; finitions</p>

    <div class="hero-badges">
      <span class="badge"><i class="fa-regular fa-clock"></i>1h30 de coaching</span>
      <span class="badge"><i class="fa-solid fa-location-dot"></i>Visio ou domicile</span>
      <span class="badge"><i class="fa-solid fa-user-check"></i>Conseils personnalisés</span>
    </div>

    <div class="hero-ctas">
      <a href="/devis" class="btn-ocre">
        <i class="fa-solid fa-calendar-check"></i>
        Réserver ma séance
      </a>
      <a href="#deroulement" class="btn-ghost-w">
        Voir le programme
        ↓
      </a>
    </div>

  </div>

  <!-- Droite : photo -->
  <div class="hero-picture"></div>

</section>


<!-- ══════ INTRO ══════ -->
<section class="section-intro reveal">
  <div class="intro-left">
    <div class="section-eyebrow">Le coaching</div>
    <h2>Un accompagnement expert pour vos travaux intérieurs</h2>
    <p>Une approche structurée, des conseils concrets et un plan d'action directement applicable à votre projet.</p>
  </div>
  <div class="intro-right">
    <p class="intro-lead">
      Vous avez un projet de rénovation intérieure et vous souhaitez être accompagné pour faire les bons choix dès le départ ?
    </p>
    <p class="intro-body">
      Que ce soit pour des travaux de peinture, d'enduits, de remise à neuf ou de transformation d'un espace, ce coaching travaux de 1h30 vous apporte une expertise claire, structurée et directement applicable. La rénovation intérieure demande une vraie réflexion technique et esthétique : préparation des supports, choix des matériaux, finitions, durabilité.<br><br>
      Pendant 1h30, nous vous accompagnons pour structurer votre projet, éviter les erreurs fréquentes, obtenir un rendu professionnel et durable, et optimiser votre budget.
    </p>
  </div>
</section>


<!-- ══════ DÉROULEMENT ══════ -->
<section class="section-deroulement" id="deroulement">
  <div class="der-inner">

    <div class="section-eyebrow reveal" style="color:rgba(201,168,76,.7);">Déroulement du coaching</div>
    <h2 class="section-title-light reveal d1">5 étapes,<br><em>une expertise complète</em></h2>

    <div class="steps">

      <div class="step reveal">
        <div class="step-num-col"><span class="step-num">01</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-magnifying-glass"></i>Analyse complète de votre intérieur</span>
          <span class="step-desc">Étude des pièces, état des supports, contraintes techniques : humidité, fissures, supports abîmés. Un regard d'expert pour identifier ce qui est invisible à l'œil non averti.</span>
        </div>
      </div>

      <div class="step reveal d1">
        <div class="step-num-col"><span class="step-num">02</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-triangle-exclamation"></i>Diagnostic des supports &amp; préparation</span>
          <span class="step-desc">Recommandations sur les enduits de rebouchage, de lissage et les bonnes pratiques de préparation pour garantir une adhérence parfaite et un résultat durable.</span>
        </div>
      </div>

      <div class="step reveal d2">
        <div class="step-num-col"><span class="step-num">03</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-layer-group"></i>Conseils sur les enduits &amp; finitions</span>
          <span class="step-desc">Enduits de lissage, décoratifs, effets matière et finitions haut de gamme. Découvrez les possibilités adaptées à votre espace et à votre budget.</span>
        </div>
      </div>

      <div class="step reveal d1">
        <div class="step-num-col"><span class="step-num">04</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-palette"></i>Choix des peintures &amp; matériaux</span>
          <span class="step-desc">Types de peinture, finitions (mat, satiné, brillant), résistance selon les pièces, harmonies de couleurs. Des choix éclairés pour un résultat cohérent et durable.</span>
        </div>
      </div>

      <div class="step reveal d2">
        <div class="step-num-col"><span class="step-num">05</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-list-check"></i>Organisation du chantier</span>
          <span class="step-desc">Ordre des étapes, matériel nécessaire, méthodologie professionnelle. Un plan concret pour mener votre chantier avec méthode et efficacité.</span>
        </div>
      </div>

      <div class="step reveal d2">
        <div class="step-num-col"><span class="step-num">06</span></div>
        <div class="step-body">
          <span class="step-title"><i class="fa-solid fa-file-pdf"></i>Guide travaux format PDF</span>
          <span class="step-desc">Ordre des étapes, matériel nécessaire, méthodologie professionnelle. Un plan concret pour mener votre chantier avec méthode et efficacité.</span>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════ BÉNÉFICES + FORMAT ══════ -->
<section class="section-split">

  <div class="split-block reveal">
    <div class="split-icon"><i class="fa-solid fa-circle-check"></i></div>
    <h3>Les bénéfices</h3>
    <ul class="split-list">
      <li>→Éviter les erreurs coûteuses dès le départ</li>
      <li>→Gagner du temps sur l'ensemble du chantier</li>
      <li>→Obtenir un résultat propre et durable</li>
      <li>→Être accompagné avec méthode et expertise</li>
      <li>→Repartir avec un plan d'action clair et concret</li>
    </ul>
  </div>

  <div class="split-block reveal d1">
    <div class="split-icon"><i class="fa-regular fa-calendar"></i></div>
    <h3>Le format</h3>
    <div class="format-items">
      <div class="format-item">
        <i class="fa-regular fa-clock"></i>
        <div><span class="fi-label">Durée</span><span class="fi-value">1h30 de coaching intensif</span></div>
      </div>
      <div class="format-item">
        <i class="fa-solid fa-location-dot"></i>
        <div><span class="fi-label">Lieu</span><span class="fi-value">Visio ou à votre domicile</span></div>
      </div>
      <div class="format-item">
        <i class="fa-solid fa-bullseye"></i>
        <div><span class="fi-label">Approche</span><span class="fi-value">Conseils 100% personnalisés</span></div>
      </div>
      <div class="format-item">
        <i class="fa-solid fa-file-lines"></i>
        <div><span class="fi-label">Livrable</span><span class="fi-value">Feuille de route personnalisée</span></div>
      </div>
    </div>
  </div>

</section>


<!-- ══════ FEUILLE DE ROUTE ══════ -->
<section class="section-feuille">
  <div class="feuille-bg"></div>
  <div class="feuille-glow"></div>
  <div class="feuille-bar-t"></div>
  <div class="feuille-bar-b"></div>

  <div class="feuille-inner reveal">
    <div class="feuille-tag">À la fin de la séance</div>
    <div class="feuille-line"></div>
    <h2>Vous repartez avec une<br><em>feuille de route complète</em></h2>
    <p>Étapes, produits, techniques et conseils pratiques. Un plan d'action clair, structuré et directement applicable à votre projet de rénovation.</p>
    <a href="/devis" class="btn-ocre">
      <i class="fa-solid fa-calendar-check"></i>
      Réserver ma séance
    </a>
  </div>
</section>


<!-- ══════ CTA FINAL ══════ -->
<section class="section-cta reveal">
  <div class="cta-left">
    <h3>Prêt à démarrer<br><em>votre projet sereinement ?</em></h3>
    <p>Contactez-nous pour réserver votre coaching ou en savoir plus sur le déroulement. Réponse sous 24h.</p>
  </div>
  <div class="cta-right">
    <a href="/devis" class="btn-primary">
      <span>Réserver ma séance</span>
      →
    </a>
    <a href="/formations" class="btn-ghost-d">
      <i class="fa-solid fa-graduation-cap"></i>
      Voir les formations
    </a>
  </div>
</section>


<!-- ══════ FOOTER ══════ -->
<footer>
  <div class="footer-main">
    <div>
      <a href="/" class="logo">
        <div class="logo-icon">AP</div>
        <div class="logo-text" style="color:var(--creme);">Les secrets du peintre
          <span class="logo-sub" style="color:rgba(201,168,76,.7);">Formations & Réalisations</span>
        </div>
      </a>
      <p class="footer-desc">Formations en peinture, airless et enduits par un artisan passionné. Accompagnement humain, qualité irréprochable.</p>
    </div>
    <div class="footer-col">
      <h4>Formations</h4>
      <a href="#">Formation airless</a>
      <a href="#">Formation enduits</a>
      <a href="#">Diagnostics travaux</a>
      <a href="#">Accompagnement 1 mois</a>
    </div>
    <div class="footer-col">
      <h4>Services</h4>
      <a href="#">Service travaux</a>
      <a href="#">Réalisation</a>
      <a href="#">Boutique</a>
      <a href="#">Contact & devis</a>
    </div>
    <div class="footer-col">
      <h4>Informations</h4>
      <a href="#">À propos</a>
      <a href="#">Témoignages</a>
      <a href="#">FAQ</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Les Secrets du Peintre — Tous droits réservés</p>
    <div class="footer-legal">
      <a href="#">Mentions légales</a>
      <a href="#">Politique de confidentialité</a>
      <a href="#">CGV</a>
      <a href="#">Cookies</a>
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const els = document.querySelectorAll('.reveal');
    if (!els.length) return;
    const obs = new IntersectionObserver(
      entries => entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } }),
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );
    els.forEach(el => obs.observe(el));
  });
</script>

</body>
</html>