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
        <div class="row mb-4">
            <div class="col-md-12">
                <a href="dashboard.php" class="btn btn-outline-secondary mb-3"><i class="bi bi-arrow-left"></i> Volver a Mis Vacantes</a>
                <h3 class="fw-bold">Candidatos para: <span class="text-primary">Asistente de Quality Assurance (QA)</span></h3>
                <p class="text-muted">Mostrando jóvenes que han aplicado a esta vacante.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                            <h5 class="card-title fw-bold mb-0"><i class="bi bi-person-circle text-primary"></i> Steven Fallas</h5>
                            <span class="badge bg-warning text-dark">En Revisión</span>
                        </div>
                        <p><strong>Nivel Académico:</strong> Estudiante Universitario</p>
                        <p><strong>Habilidades:</strong> Trabajo en equipo, HTML, SQL, Pruebas Manuales</p>
                        
                        <div class="bg-light p-3 rounded mb-3 border">
                            <small class="fw-bold text-muted d-block mb-1">Carta de Presentación:</small>
                            <p class="mb-0 small fst-italic">"Hola, me encantaría formar parte de Tech Solutions. Tengo conocimientos básicos en pruebas de software y muchas ganas de aprender. Actualmente estudio Ingeniería en Sistemas y busco mi primera experiencia formal para aplicar mis conocimientos de la universidad."</p>
                        </div>
                        
                        <div class="d-flex justify-content-between mt-auto">
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-file-earmark-pdf-fill"></i> Descargar CV</a>
                            
                            <div>
                                <button class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Aceptar</button>
                                <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Rechazar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                            <h5 class="card-title fw-bold mb-0"><i class="bi bi-person-circle text-primary"></i> María Rodríguez</h5>
                            <span class="badge bg-secondary">Pendiente</span>
                        </div>
                        <p><strong>Nivel Académico:</strong> Bachiller Universitario</p>
                        <p><strong>Habilidades:</strong> Documentación, Organización, Inglés Intermedio</p>
                        
                        <div class="bg-light p-3 rounded mb-3 border">
                            <small class="fw-bold text-muted d-block mb-1">Carta de Presentación:</small>
                            <p class="mb-0 small fst-italic">"Soy una persona muy organizada y me gusta asegurar la calidad en cada proceso. Aunque no tengo experiencia formal en QA, tengo facilidad para aprender herramientas nuevas rápidamente."</p>
                        </div>
                        
                        <div class="d-flex justify-content-between mt-auto">
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-file-earmark-pdf-fill"></i> Descargar CV</a>
                            <div>
                                <button class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Aceptar</button>
                                <button class="btn btn-outline-danger btn-sm"><i class="bi bi-x-circle"></i> Rechazar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>