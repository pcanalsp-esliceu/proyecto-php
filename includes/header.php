<?php
if (!isset($pageTitle)) {
    $pageTitle = "Mi sitio en PHP con Docker";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/lightbox.css?v=<?php echo time(); ?>">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1 class="logo">Mi sitio PHP</h1>
        <nav class="main-nav">
            <a href="/index.php">Inicio</a>
            <a href="/acerca.php">Acerca</a>
            <a href="/galeria.php">Galeria</a>
            <a href="/contacte.php">Contacte</a>
        </nav>
    </div>
</header>
<main class="site-content">