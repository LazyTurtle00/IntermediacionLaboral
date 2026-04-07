<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
                <div class="card shadow-sm border-0 bg-white position-relative">
                    
                    <a href="javascript:void(0);" 
                       class="position-absolute top-0 end-0 m-3 text-primary text-decoration-none btn-limpio-perfil"
                       style="background: transparent !important; border: none !important; box-shadow: none !important;"
                       data-bs-toggle="modal" data-bs-target="#modalEditarInfoEmpresa">
                        <i class="bi bi-pencil-fill fs-4"></i>
                    </a>

                    <div class="card-body d-flex align-items-center p-4">
                        <div class="me-4">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['nombre']); ?>&background=0d6efd&color=fff&size=120&bold=true"
                                alt="Logo Empresa" class="rounded shadow-sm border border-3 border-white">
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1"><?php echo $_SESSION['nombre']; ?></h2>
                            <p class="text-muted fs-5 mb-2"><i class="bi bi-building"></i> Sector: Tecnología / Software</p>
                            <p class="mb-0">
                                <i class="bi bi-geo-alt"></i> San José, Costa Rica | 
                                <i class="bi bi-telephone"></i> +(506) 2222-0000
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
                        <ul class="nav nav-tabs nav-fill px-3 pt-3 border-0" id="empresaTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active fw-bold border-0" id="vacantes-tab" data-bs-toggle="tab"
                                    data-bs-target="#vacantes" type="button" role="tab"><i
                                        class="bi bi-briefcase-fill"></i> Mis Vacantes</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link fw-bold border-0" id="info-tab" data-bs-toggle="tab"
                                    data-bs-target="#info" type="button" role="tab"><i
                                        class="bi bi-info-square-fill"></i> Perfil Público</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link fw-bold border-0 text-primary" id="config-tab"
                                    data-bs-toggle="tab" data-bs-target="#config" type="button" role="tab"><i
                                        class="bi bi-gear-fill"></i> Editar Información</button>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body p-4 tab-content perfil-container-fijo" id="perfilTabsContent">

                        <div class="tab-pane fade show active" id="vacantes" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="fw-bold mb-0">Ofertas de Empleo Publicadas</h5>
                                <a href="crear_vacante.php" class="btn btn-primary btn-sm"><i class="bi bi-plus-lg"></i> Publicar Nueva</a>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-hover align-middle w-100">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Puesto</th>
                                            <th>Postulantes</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Asistente de QA</td>
                                            <td><span class="badge bg-info text-dark">8 Candidatos</span></td>
                                            <td><span class="badge bg-success">Activa</span></td>
                                            <td>
                                                <a href="ver_candidatos.php" class="btn btn-sm btn-outline-primary">Ver</a>
                                                <button class="btn btn-sm btn-outline-secondary" style="color:white"><i class="bi bi-pencil"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <h5 class="fw-bold border-bottom pb-2">Sobre Nosotros</h5>
                            <p class="text-muted">Somos una empresa líder en el desarrollo de soluciones tecnológicas en Costa Rica. Nos enfocamos en dar oportunidad a jóvenes talentos que buscan su primera experiencia laboral en el área de sistemas.</p>
                            
                            <h5 class="fw-bold border-bottom pb-2 mt-4">Cultura Organizacional</h5>
                            <p>Trabajo en equipo, innovación constante y un ambiente de aprendizaje continuo.</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5 class="fw-bold border-bottom pb-2">Contacto</h5>
                                    <p><i class="bi bi-globe text-primary"></i> www.techsolutions.cr</p>
                                    <p><i class="bi bi-envelope text-primary"></i> talento@techsolutions.cr</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="config" role="tabpanel">
                            <form action="../../controllers/EmpresaController.php" method="POST">
                                <input type="hidden" name="action" value="guardar_configuracion">

                                <h5 class="fw-bold text-primary mb-3">Información Corporativa</h5>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre de la Empresa</label>
                                        <input type="text" class="form-control" name="nombre_empresa" value="<?php echo $_SESSION['nombre']; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Sector Industrial</label>
                                        <select class="form-select" name="sector">
                                            <option>Tecnología</option>
                                            <option>Servicios</option>
                                            <option>Comercio</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Biografía / Descripción</label>
                                    <textarea class="form-control" name="bio_empresa" rows="4"></textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Sitio Web</label>
                                        <input type="url" class="form-control" name="website" placeholder="https://...">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Teléfono Corporativo</label>
                                        <input type="tel" class="form-control" name="telefono">
                                    </div>
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Actualizar Perfil de Empresa</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="modalEditarInfoEmpresa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Actualizar Cabecera</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="../../controllers/EmpresaController.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="action" value="editar_cabecera_empresa">
                    
                    <div class="mb-3 text-center">
                        <label class="form-label d-block fw-bold">Logo de Empresa</label>
                        <input type="file" class="form-control" name="logo_empresa" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nombre Comercial</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $_SESSION['nombre']; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Ubicación Sede</label>
                        <input type="text" class="form-control" name="ubicacion" value="San José, Costa Rica">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>