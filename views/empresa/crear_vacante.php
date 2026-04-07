<?php 
if (session_status() === PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'empresa') {
    header("Location: /intermediacion-laboral-jovenes/views/auth/login.php");
    exit();
}
include '../templates/header.php'; 
?>

<main class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0"><i class="bi bi-briefcase-fill"></i> Publicar Nueva Vacante</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="../../controllers/EmpresaController.php" method="POST">
                            <input type="hidden" name="action" value="crear_vacante">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Título del Puesto</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Ej. Asistente Administrativo, Desarrollador Junior..." required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Modalidad de Trabajo</label>
                                    <select name="modalidad" class="form-select" required>
                                        <option value="Presencial">Presencial</option>
                                        <option value="Remoto">Remoto (Work from Home)</option>
                                        <option value="Híbrido">Híbrido</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Salario Mensual (Opcional)</label>
                                    <input type="text" name="salario" class="form-control" placeholder="Ej. ¢350,000 - ¢400,000">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Descripción del Puesto</label>
                                <textarea name="descripcion" class="form-control" rows="4" placeholder="Describe las responsabilidades diarias y el objetivo del puesto..." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Requisitos Mínimos</label>
                                <textarea name="requisitos" class="form-control" rows="3" placeholder="Menciona qué necesitas que el joven sepa (Recuerda que es para perfiles junior)..." required></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Beneficios</label>
                                <textarea name="beneficios" class="form-control" rows="2" placeholder="Ej. Asociación solidarista, días libres adicionales, capacitación..."></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-lg">Publicar Oferta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>