<?php
// Iniciamos el motor de sesiones
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    // --- 1. LÓGICA DE REGISTRO ---
    // Esta parte permite que cualquier dato que metas en el form de registro 
    // se convierta en tu sesión actual.
    if ($action == 'registro') {
        $nombre   = $_POST['nombre'];
        $correo   = $_POST['correo'];
        $rol      = $_POST['rol'];
        $password = $_POST['password']; // En esta fase no la validamos, solo capturamos

        // Guardamos los datos en la "maleta" de la sesión
        $_SESSION['logeado'] = true;
        $_SESSION['nombre']  = $nombre;
        $_SESSION['correo']  = $correo;
        $_SESSION['rol']     = $rol;

        // Redirigimos al dashboard correspondiente
        if ($rol == 'joven') {
            header("Location: ../views/joven/dashboard.php");
        } else if ($rol == 'empresa') {
            header("Location: ../views/empresa/dashboard.php");
        }
        exit();
    }

    // --- 2. LÓGICA DE LOGIN (DATOS QUEMADOS PARA PRUEBAS) ---
    if ($action == 'login') {
        $correo   = $_POST['correo'];
        $password = $_POST['password'];

        // Prueba: Usuario JOVEN
        if ($correo == 'joven@test.com' && $password == '123') {
            $_SESSION['logeado'] = true;
            $_SESSION['rol']     = 'joven';
            $_SESSION['nombre']  = 'Steven Fallas';
            $_SESSION['correo']  = 'joven@test.com';
            header("Location: ../views/joven/dashboard.php");
            exit();
        } 
        
        // Prueba: Usuario EMPRESA
        else if ($correo == 'empresa@test.com' && $password == '123') {
            $_SESSION['logeado'] = true;
            $_SESSION['rol']     = 'empresa';
            $_SESSION['nombre']  = 'Tech Solutions CR';
            $_SESSION['correo']  = 'empresa@test.com';
            header("Location: ../views/empresa/dashboard.php");
            exit();
        }

        // Prueba: Usuario ADMIN
        else if ($correo == 'admin@test.com' && $password == '123') {
            $_SESSION['logeado'] = true;
            $_SESSION['rol']     = 'admin';
            $_SESSION['nombre']  = 'Administrador Principal';
            $_SESSION['correo']  = 'admin@test.com';
            header("Location: ../views/admin/dashboard.php");
            exit();
        }

        // Si no es ninguno de los anteriores
        else {
            header("Location: ../views/auth/login.php?error=1");
            exit();
        }
    }
}

// --- 3. LÓGICA DE LOGOUT (CERRAR SESIÓN) ---
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: ../index.php");
    exit();
}