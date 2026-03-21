<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?? 'Meu App' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav> </nav>

    <main>
        <?php require_once $viewPath; ?>
    </main>

    <script src="js/script.js"></script>

    <footer> &copy; 2026 MediaLens </footer>
</body>
</html>