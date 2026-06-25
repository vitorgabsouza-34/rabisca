<?php
$currentPageMetadata = getMetadata($currentPage);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $currentPageMetadata['description'] ?>">
    <meta name="keywords" content="<?= $currentPageMetadata['keywords'] ?>">
    <title><?= $currentPageMetadata['title'] ?></title>
    <link rel="icon" href="<?= BASE_URL ?>/favicon.ico" type="image/x-icon" sizes="any">
    <link rel="icon" href="<?= BASE_URL ?>/images/favicon.svg" type="image/svg+xml" sizes="any">
    <link rel="icon" href="<?= BASE_URL ?>/images/favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="icon" href="<?= BASE_URL ?>/images/favicon-32x32.png" type="image/png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/images/apple-touch-icon.png" type="image/png" sizes="180x180">
    <link rel="manifest" href="<?= BASE_URL ?>/site.webmanifest">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/application.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <script src="<?= BASE_URL ?>/javascript/application.min.js" defer></script>
</head>

<body class="d-flex flex-column gap-5 min-vh-100">
    <header>
        <nav class="navbar navbar-expand-xl bg-body-tertiary">
            <div class="container-xxl">
                <a class="navbar-brand" href="<?= !isset($_SESSION['user-id']) ? BASE_URL . '/' : BASE_URL . '/dashboard' ?>" aria-label="<?= !isset($_SESSION['user-id']) ? 'Início' : 'Painel' ?>">
                    <img src="<?= BASE_URL ?>/images/logo.svg" alt="Logo da aplicação">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <?php if (!isset($_SESSION['user-id'])): ?>

                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'home' ? 'active' : '' ?>" <?= $current_page === 'home' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/">
                                    <i class="bi bi-house" aria-hidden="true"></i> Início
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'signup' ? 'active' : '' ?>" <?= $current_page === 'signup' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/signup">
                                    <i class="bi bi-person-plus" aria-hidden="true"></i> Criar Conta
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'login' ? 'active' : '' ?>" <?= $current_page === 'login' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/login">
                                    <i class="bi bi-box-arrow-in-right" aria-hidden="true"></i> Entrar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'about' ? 'active' : '' ?>" <?= $current_page === 'about' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/about">
                                    <i class="bi bi-info-circle" aria-hidden="true"></i> Sobre
                                </a>
                            </li>

                        <?php else: ?>

                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'dashboard' ? 'active' : '' ?>" <?= $current_page === 'dashboard' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/dashboard">
                                    <i class="bi bi-speedometer2" aria-hidden="true"></i> Painel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $current_page === 'settings' ? 'active' : '' ?>" <?= $current_page === 'settings' ? 'aria-current="page"' : '' ?> href="<?= BASE_URL ?>/settings">
                                    <i class="bi bi-gear" aria-hidden="true"></i> Configurações
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASE_URL ?>/logout">
                                    <i class="bi bi-box-arrow-in-left" aria-hidden="true"></i> Sair
                                </a>
                            </li>

                        <?php endif; ?>

                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle" id="navbarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-universal-access" aria-hidden="true"></i> Acessibilidade
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" id="toggle-theme" type="button">
                                        <i class="bi bi-moon" aria-hidden="true"></i>
                                        <span>Modo Escuro</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="increase-font-size" type="button">
                                        <i class="bi bi-plus-circle" aria-hidden="true"></i> Aumentar Fonte
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="decrease-font-size" type="button">
                                        <i class="bi bi-dash-circle" aria-hidden="true"></i> Diminuir Fonte
                                    </button>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <button class="dropdown-item" id="reset-settings" type="button">
                                        <i class="bi bi-arrow-counterclockwise" aria-hidden="true"></i> Redefinir Configurações
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>