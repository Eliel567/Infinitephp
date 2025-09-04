<?php
// Caminho da logo
$logo = "Image/Infinite.png"; // ajuste para onde você salvou a imagem
$bg   = "#1980BA"; // cor de fundo
$title = "Infinite";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($title) ?></title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0
    }

    html,
    body {
      height: 100%
    }

    body {
      background-color: <?= $bg ?>;
      font-family: "Inter", Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* wrapper central */
    .brand {
      display: flex;
      align-items: center;
      gap: 14px;
      /* espaço entre texto e símbolo */
      padding: 16px;
      background: transparent;
    }

    /* texto "Infinite" */
    .brand__title {
      font-size: clamp(28px, 5vw, 48px);
      font-weight: 800;
      letter-spacing: 0.6px;
      color: black;
      /* se preferir branco, troque para #fff */
      line-height: 1;
    }

    /* símbolo (sua imagem) */
    .brand__logo {
      width: clamp(44px, 8vw, 96px);
      height: auto;
      display: block;
    }

    /* responsivo: em telas pequenas empilha verticalmente */
    @media (max-width:520px) {
      .brand {
        flex-direction: column;
        gap: 10px;
      }

      .brand__title {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="brand" role="banner" aria-label="Marca Infinite">
    <span class="brand__title"><?= htmlspecialchars($title) ?></span>
    <img src="<?= htmlspecialchars($logo) ?>" alt="Símbolo do infinito" class="brand__logo">
  </div>
</body>

</html>
