<?php
  // ====== CONFIGURAÇÕES RÁPIDAS ======
  $bg        = "#1980BA";                       // cor de fundo
  $imgMulher = "Image/produtividade.png";             // <- troque para o seu arquivo (PNG/JPG)
  $imgInfinito = "Image/Infinite.png";         // <- troque para o seu arquivo (SVG/PNG)
  $titulo    = "Infinite";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($titulo) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg: <?= $bg ?>;
      --text: #0A0A0A;
      --btn-bg: #FFFFFF;
      --btn-text: #0A0A0A;
      --btn-shadow: 0 8px 24px rgba(0,0,0,.15);
      --card-shadow: 0 10px 30px rgba(0,0,0,.20);
      --maxw: 1024px;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: var(--bg);
      color:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      -webkit-font-smoothing:antialiased;
      text-rendering:optimizeLegibility;
    }
    .wrap{
      width:100%;
      max-width:var(--maxw);
      padding: clamp(16px, 4vw, 40px);
    }

    /* Cabeçalho */
    .brand{
      display:flex;
      gap:12px;
      align-items:center;
      margin-bottom: clamp(16px, 3vw, 24px);
    }
    .brand__title{
      font-weight: 800;
      font-size: clamp(34px, 5vw, 56px);
      line-height:1;
      letter-spacing:.2px;
    }
    .brand__icon{
      height: clamp(28px, 4vw, 40px);
      width: auto;
      filter: brightness(0) invert(0); /* mantém o ícone escuro como na referência */
    }

    /* Herói */
    .hero{
      display:grid;
      grid-template-columns: 1.15fr .85fr;
      gap: clamp(16px, 4vw, 32px);
      align-items:center;
    }
    .hero__copy h2{
      margin:0 0 8px 0;
      font-weight: 800;
      font-size: clamp(22px, 3.6vw, 40px);
      color:#000; /* título preto, como no mock */
      text-shadow: none;
    }
    .hero__copy p{
      margin:0;
      font-weight: 800;
      font-size: clamp(18px, 2.8vw, 32px);
      color:#000;
    }

    /* Ilustração card para dar profundidade */
    .hero__art{
      justify-self:end;
      width: min(520px, 100%);
      aspect-ratio: 4 / 5;
      border-radius: 24px;
      background: rgba(255,255,255,.06);
      box-shadow: var(--card-shadow);
      display:flex;
      align-items:center;
      justify-content:center;
      padding: clamp(8px, 2vw, 18px);
      position: relative;
      overflow:hidden;
    }
    .hero__art img{
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    /* Botões */
    .cta{
      margin-top: clamp(18px, 3.5vw, 28px);
      display:flex;
      gap: clamp(12px, 2.5vw, 24px);
      flex-wrap: wrap;
    }
    .btn{
      appearance:none;
      border:0;
      border-radius: 999px;
      padding: 16px 26px;
      font-weight: 600;
      font-size: clamp(16px, 2.6vw, 18px);
      background: var(--btn-bg);
      color: var(--btn-text);
      cursor:pointer;
      box-shadow: var(--btn-shadow);
      transition: transform .08s ease, box-shadow .2s ease, opacity .2s ease;
      text-decoration:none;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      min-width: 200px;
    }
    .btn:active{ transform: translateY(1px) scale(.995); }
    .btn:hover{ opacity:.96 }

    /* Responsivo */
    @media (max-width: 860px){
      .hero{ grid-template-columns: 1fr; }
      .hero__art{ justify-self: center; order: 2; width: min(460px, 100%); }
      .hero__copy{ order: 1; }
      .brand{ justify-content:center; }
      .brand__title{ text-align:center; }
      .hero__copy h2, .hero__copy p{ text-align:center; }
      .cta{ justify-content:center; }
    }
  </style>
</head>
<body>
  <main class="wrap" role="main">
    <!-- Marca -->
    <div class="brand" aria-label="Marca Infinite">
      <h1 class="brand__title"><?= htmlspecialchars($titulo) ?></h1>
      <img class="brand__icon" src="<?= htmlspecialchars($imgInfinito) ?>" alt="Símbolo do infinito">
    </div>

    <!-- Conteúdo principal -->
    <section class="hero">
      <div class="hero__copy">
        <h2>Simples, flexível e poderoso.</h2>
        <p>Mantenha tudo em um só lugar.</p>

        <div class="cta" aria-label="Ações">
          <a class="btn" href="login.php">Iniciar Sessão</a>
          <a class="btn" href="criar-conta.php">Criar Conta</a>
        </div>
      </div>

      <figure class="hero__art">
        <img src="<?= htmlspecialchars($imgMulher) ?>" alt="Pessoa sentada com notebook e painéis flutuantes" />
      </figure>
    </section>
  </main>
</body>
</html>
