<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Intermediación Laboral Juvenil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/intermediacion-laboral-jovenes/assets/css/style.css">
</head>

<body>
    <header class="bg-primary text-white py-4">
        <div class="container">
            <h1>Intermediación Laboral para Jóvenes en Costa Rica</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/intermediacion-laboral-jovenes/index.php">
                            <i class="bi bi-house-fill"></i> Inicio
                        </a>
                    </li>

                    <?php if (isset($_SESSION['logeado']) && $_SESSION['logeado'] === true): ?>

                        <?php if ($_SESSION['rol'] === 'joven'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/intermediacion-laboral-jovenes/views/joven/dashboard.php">
                                    <i class="bi bi-search"></i> Buscar Empleos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/intermediacion-laboral-jovenes/views/joven/mi_perfil.php">
                                    <i class="bi bi-person-badge-fill"></i> Mi Perfil
                                </a>
                            </li>

                        <?php elseif ($_SESSION['rol'] === 'empresa'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/intermediacion-laboral-jovenes/views/empresa/dashboard.php">
                                    <i class="bi bi-speedometer2"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/intermediacion-laboral-jovenes/views/empresa/perfil_empresa.php">
                                    <i class="bi bi-building"></i> Perfil Empresa
                                </a>
                            </li>

                        <?php elseif ($_SESSION['rol'] === 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/intermediacion-laboral-jovenes/views/admin/dashboard.php">
                                    <i class="bi bi-shield-lock-fill"></i> Administración
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <span class="nav-link fw-bold text-primary ms-3">Hola, <?php echo $_SESSION['nombre']; ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger fw-bold"
                                href="/intermediacion-laboral-jovenes/controllers/auth.php?action=logout">
                                <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                            </a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="/intermediacion-laboral-jovenes/views/auth/login.php">
                                <i class="bi bi-lock-fill"></i> Inicio de sesión
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/intermediacion-laboral-jovenes/views/auth/registro.php">
                                <i class="bi bi-person-plus-fill"></i> Registro
                            </a>
                        </li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>