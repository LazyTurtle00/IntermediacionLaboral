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
            <div class="col-md-4">
                <div class="card bg-primary text-white shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h1 class="display-4 fw-bold">3</h1>
                        <p class="mb-0 fs-5">Vacantes Activas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h1 class="display-4 fw-bold">12</h1>
                        <p class="mb-0 fs-5">Nuevos Postulantes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white shadow-sm border-0 h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <p class="mb-2 fs-5">¿Buscas más talento?</p>
                        <a href="crear_vacante.php" class="btn btn-light text-dark fw-bold w-75"><i class="bi bi-plus-circle-fill"></i> Crear Vacante</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Mis Vacantes Publicadas</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Puesto</th>
                                        <th>Fecha de Publicación</th>
                                        <th>Postulantes</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-primary">Asistente de Quality Assurance (QA)</td>
                                        <td>05 Abril, 2026</td>
                                        <td><span class="badge bg-danger rounded-pill px-3">8 Nuevos</span></td>
                                        <td><span class="badge bg-success">Activa</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-people-fill"></i> Ver Candidatos</a>
                                            <button class="btn btn-gradiente btn-sm btn-outline-secondary" style="color: white;"><i class="bi bi-pencil-fill"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" style="color: white;"><i class="bi bi-trash-fill"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-primary">Soporte Técnico Nivel 1</td>
                                        <td>07 Abril, 2026</td>
                                        <td><span class="badge bg-secondary rounded-pill px-3">4 Totales</span></td>
                                        <td><span class="badge bg-success">Activa</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-people-fill"></i> Ver Candidatos</a>
                                            <button class="btn btn-gradiente btn-sm btn-outline-secondary" style="color: white;"><i class="bi bi-pencil-fill"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" style="color: white;"><i class="bi bi-trash-fill"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../templates/footer.php'; ?>