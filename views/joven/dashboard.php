<?php 
if (session_status() === PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'joven') {
    header("Location: /intermediacion-laboral-jovenes/views/auth/login.php");
    exit();
}
include '../templates/header.php'; 
?>

<main class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form class="d-flex">
                            <input class="form-control me-2 form-control-lg" type="search" placeholder="Buscar puestos (Ej. Asistente, Junior, Ventas...)" aria-label="Search">
                            <button class="btn-gradiente btn-lg px-4" type="submit"><i class="bi bi-search"></i> Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-3">Vacantes Recientes para Ti</h4>
                
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title fw-bold text-primary mb-1">Asistente de Quality Assurance (QA)</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="bi bi-building"></i> Tech Solutions CR &bull; <i class="bi bi-geo-alt"></i> Remoto</h6>
                            <p class="card-text mb-0 mt-2">Buscamos un perfil junior para apoyar en la ejecución de pruebas manuales y documentación de procesos. No se requiere experiencia previa, solo conocimientos básicos.</p>
                            <span class="badge bg-success mt-2">Nivel: Junior / Primer Empleo</span>
                            <span class="badge bg-secondary mt-2">Modalidad: Remoto</span>
                        </div>
                        <div class="text-end ms-3">
                            <button class="btn-gradiente mb-2 w-100">Aplicar ahora</button>
                            <br>
                            <small class="text-muted">Publicado hace 2 días</small>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title fw-bold text-primary mb-1">Soporte Técnico Nivel 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="bi bi-building"></i> Redes Globales S.A. &bull; <i class="bi bi-geo-alt"></i> San José, Presencial</h6>
                            <p class="card-text mb-0 mt-2">Oportunidad para jóvenes entusiastas de la tecnología. Te capacitaremos en la resolución de problemas de hardware y software para nuestros clientes locales.</p>
                            <span class="badge bg-success mt-2">Nivel: Junior / Primer Empleo</span>
                            <span class="badge bg-secondary mt-2">Modalidad: Presencial</span>
                        </div>
                        <div class="text-end ms-3">
                            <button class="btn-gradiente mb-2 w-100">Aplicar ahora</button>
                            <br>
                            <small class="text-muted">Publicado hoy</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>