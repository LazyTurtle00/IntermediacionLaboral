<?php 
if (session_status() === PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header("Location: /intermediacion-laboral-jovenes/views/auth/login.php");
    exit();
}
include '../templates/header.php'; 
?>

<main class="py-5 container">
    <h2>Panel de Administración Superior</h2>
    <p>Bienvenido, <?php echo $_SESSION['nombre']; ?>. Aquí podrás gestionar usuarios bloqueados y moderar las vacantes publicadas.</p>
</main>

<?php include '../templates/footer.php'; ?>