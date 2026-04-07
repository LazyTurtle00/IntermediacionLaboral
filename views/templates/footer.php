<footer class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <?php if (isset($_SESSION['logeado']) && $_SESSION['logeado'] === true): ?>
                
                <p class="mb-2">
                    Conectado como: <span class="text-primary fw-bold"><?php echo $_SESSION['nombre']; ?></span> 
                    <span class="badge bg-secondary ms-2"><?php echo ucfirst($_SESSION['rol']); ?></span>
                </p>
                <p class="mb-3">
                    <a href="/intermediacion-laboral-jovenes/index.php" class="text-white text-decoration-none me-3"><i class="bi bi-house"></i> Inicio</a>
                    <a href="/intermediacion-laboral-jovenes/controllers/auth.php?action=logout" class="text-danger text-decoration-none"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</a>
                </p>

            <?php else: ?>
                
                <p class="mb-3">
                    ¿Aún no eres parte de la plataforma? 
                    <a href="/intermediacion-laboral-jovenes/views/auth/registro.php" class="text-info text-decoration-none fw-bold ms-1">Regístrate aquí</a>
                </p>

            <?php endif; ?>

            <hr class="border-secondary">
            <p class="mb-0 text-secondary small">© 2026 - Plataforma de Intermediación Laboral Juvenil Costa Rica</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/intermediacion-laboral-jovenes/assets/js/script.js"></script>
</body>
</html>