<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
                <div class="card shadow-sm border-0 bg-white position-relative">

                    <a href="javascript:void(0);"
                        class="position-absolute top-0 end-0 m-3 text-primary text-decoration-none"
                        data-bs-toggle="modal" data-bs-target="#modalEditarInfoBasica"
                        title="Editar información básica">
                        <i class="bi bi-pencil-fill fs-4"></i>
                    </a>

                    <div class="card-body d-flex align-items-center p-4">
                        <div class="me-4">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['nombre']); ?>&background=6366f1&color=fff&size=120"
                                alt="Foto de perfil" class="rounded-circle shadow-sm border border-3 border-white">
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1"><?php echo $_SESSION['nombre']; ?></h2>
                            <p class="text-muted fs-5 mb-2"><i class="bi bi-briefcase"></i> Perfil Junior / Primer
                                Empleo</p>
                            <p class="mb-0">
                                <i class="bi bi-envelope"></i>
                                <?php echo $_SESSION['correo'] ?? 'usuario@correo.com'; ?>
                                | <i class="bi bi-geo-alt"></i> Costa Rica
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white p-0 border-bottom">
                        <ul class="nav nav-tabs nav-fill px-3 pt-3 border-0" id="perfilTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active fw-bold border-0" id="resumen-tab" data-bs-toggle="tab"
                                    data-bs-target="#resumen" type="button" role="tab"><i
                                        class="bi bi-person-lines-fill"></i> Mi Resumen</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold border-0" id="postulaciones-tab" data-bs-toggle="tab"
                                    data-bs-target="#postulaciones" type="button" role="tab"><i
                                        class="bi bi-send-check-fill"></i> Mis Postulaciones</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fw-bold border-0 text-primary" id="editar-tab"
                                    data-bs-toggle="tab" data-bs-target="#editar" type="button" role="tab"><i
                                        class="bi bi-pencil-square"></i> Editar Perfil</button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body p-4 tab-content contenedor-fijo-perfil" id="perfilTabsContent">

                        <div class="tab-pane fade show active" id="resumen" role="tabpanel">
                            <h5 class="fw-bold border-bottom pb-2">Biografía</h5>
                            <p class="text-muted">Estudiante de Ingeniería en Sistemas apasionado por la tecnología.
                                Busco mi primera oportunidad formal para aplicar mis conocimientos académicos en un
                                entorno real y seguir creciendo profesionalmente.</p>

                            <h5 class="fw-bold border-bottom pb-2 mt-4">Nivel Académico</h5>
                            <p><i class="bi bi-mortarboard-fill text-primary"></i> Estudiante Universitario -
                                Universidad Fidélitas</p>

                            <h5 class="fw-bold border-bottom pb-2 mt-4">Habilidades (Skills)</h5>
                            <div>
                                <span class="badge bg-secondary me-1">Trabajo en equipo</span>
                                <span class="badge bg-secondary me-1">Inglés Intermedio</span>
                                <span class="badge bg-secondary me-1">Lógica de Programación</span>
                                <span class="badge bg-secondary">Bases de Datos Básicas</span>
                            </div>

                            <div class="mt-4 p-3 bg-light rounded border border-primary border-opacity-25">
                                <strong><i class="bi bi-file-earmark-pdf text-danger"></i> Currículum Vitae:</strong>
                                <a href="#" class="btn btn-sm btn-outline-danger ms-2">Ver CV Actual</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="postulaciones" role="tabpanel">
                            <h5 class="fw-bold mb-3">Seguimiento de mis aplicaciones</h5>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Puesto</th>
                                            <th>Empresa</th>
                                            <th>Fecha de Postulación</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-primary">Asistente de QA</td>
                                            <td>Tech Solutions CR</td>
                                            <td>05 Abril, 2026</td>
                                            <td><span class="badge bg-warning text-dark">En Revisión</span></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold text-primary">Soporte Técnico Junior</td>
                                            <td>Redes Globales S.A.</td>
                                            <td>01 Abril, 2026</td>
                                            <td><span class="badge bg-success">Aceptado para Entrevista</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="editar" role="tabpanel">
                            <form class="form-perfil-completo" action="../../controllers/JovenController.php" method="POST"
                                enctype="multipart/form-data">
                                <input type="hidden" name="action" value="guardar_perfil">

                                <h5 class="fw-bold text-primary mb-3"><i class="bi bi-person-badge"></i> Datos
                                    Personales</h5>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" name="nombre"
                                            value="<?php echo $_SESSION['nombre']; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" name="telefono"
                                            placeholder="Ej. 8888-8888">
                                    </div>
                                </div>

                                <h5 class="fw-bold text-primary mb-3 mt-4"><i class="bi bi-briefcase"></i> Perfil
                                    Laboral</h5>
                                <div class="mb-3">
                                    <label class="form-label">Biografía</label>
                                    <textarea name="biografia" class="form-control" rows="3"
                                        placeholder="Cuéntale a las empresas sobre ti..."></textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nivel Académico</label>
                                        <select name="nivel_academico" class="form-select">
                                            <option>Estudiante Universitario</option>
                                            <option>Bachiller Universitario</option>
                                            <option>Secundaria Completa</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Institución</label>
                                        <input type="text" name="institucion" class="form-control"
                                            placeholder="Ej. U. Fidélitas">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Habilidades (Separadas por comas)</label>
                                    <input type="text" name="habilidades" class="form-control"
                                        placeholder="Ej. Trabajo en equipo, SQL, Lógica">
                                </div>

                                <div class="mb-4 p-3 border rounded bg-light">
                                    <label class="form-label fw-bold text-danger">Actualizar Currículum (PDF)</label>
                                    <input type="file" name="cv_pdf" class="form-control" accept=".pdf">
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn-gradiente btn-lg"><i class="bi bi-save"></i>
                                        Guardar Todos los Cambios</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="modalEditarInfoBasica" tabindex="-1" aria-labelledby="modalEditarInfoBasicaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalEditarInfoBasicaLabel"><i class="bi bi-pencil-square"></i> Actualizar
                    Información</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="../../controllers/JovenController.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="action" value="editar_info_basica">

                    <div class="mb-4 text-center">
                        <label class="form-label d-block fw-bold mb-3">Foto de Perfil</label>
                        <div class="position-relative d-inline-block">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['nombre']); ?>&background=6366f1&color=fff&size=100"
                                class="rounded-circle mb-2 border shadow-sm" alt="Foto">
                            <input type="file" name="foto_perfil" class="form-control form-control-sm mt-2"
                                accept="image/*">
                        </div>
                        <div class="form-text">Formatos permitidos: JPG, PNG. Máx 1MB.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Título Profesional</label>
                        <input type="text" name="titulo_profesional" class="form-control"
                            placeholder="Ej. Estudiante de Ingeniería / Desarrollador Junior"
                            value="Perfil Junior / Primer Empleo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Lugar de Residencia</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="ubicacion" class="form-control" value="Costa Rica">
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn-gradiente px-4">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>