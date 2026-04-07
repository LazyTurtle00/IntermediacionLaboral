<?php 
// Iniciamos sesión por si ocupamos mostrar algún mensaje luego
if (session_status() === PHP_SESSION_NONE) { session_start(); }
include '../templates/header.php'; 
?>

<main class="py-5 bg-light min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 col-xl-10">
                
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        
                        <div class="text-center mb-4">
                            <div class="display-6 fw-bold text-primary mb-2">Crear Cuenta</div>
                            <p class="text-muted">Únete a la plataforma de empleo juvenil de Costa Rica</p>
                        </div>

                        <form action="../../controllers/auth.php" method="POST">
                            <input type="hidden" name="action" value="registro">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nombre Completo / Empresa</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-person text-muted"></i></span>
                                    <input type="text" name="nombre" class="form-control border-start-0 ps-0" 
                                           placeholder="Ej: Steven Fallas" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Correo Electrónico</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                                    <input type="email" name="correo" class="form-control border-start-0 ps-0" 
                                           placeholder="nombre@ejemplo.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">¿Cómo quieres usar la plataforma?</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-person-badge text-muted"></i></span>
                                    <select name="rol" class="form-select border-start-0 ps-0" required>
                                        <option value="" selected disabled>Selecciona tu rol...</option>
                                        <option value="joven">Soy un Joven (Busco empleo)</option>
                                        <option value="empresa">Soy una Empresa (Busco talento)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-lock text-muted"></i></span>
                                    <input type="password" name="password" class="form-control border-start-0 ps-0" 
                                           placeholder="Crea una contraseña segura" required minlength="6">
                                </div>
                                <div class="form-text">Mínimo 6 caracteres.</div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm py-3">
                                    Registrarme ahora
                                </button>
                            </div>

                            <div class="text-center mt-4">
                                <p class="mb-0 text-muted">
                                    ¿Ya tienes una cuenta? 
                                    <a href="login.php" class="text-primary fw-bold text-decoration-none">Inicia sesión aquí</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>

                <p class="text-center text-muted mt-4 small">
                    Al registrarte, aceptas nuestros términos y condiciones de uso.
                </p>

            </div>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>