<!-- [ Layout content ] Start -->
<div class="layout-content">

	<!-- [ content ] Start -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="font-weight-bold py-3 mb-0">Editar Curso</h4>
		<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>

				<li class="breadcrumb-item ">Profesor</li>
				<li class="breadcrumb-item active">Editar Curso</li>
			</ol>
		</div>
		<div class="card overflow-hidden">
			<div class="row no-gutters row-bordered row-border-light">
				<div class="col-md-3 pt-0">
					<div class="list-group list-group-flush account-settings-links">
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>


					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">

						<div class="tab-pane fade show active" id="account-general">
							<form action="<?= base_url(); ?>lesson/edit" method="post" enctype="multipart/form-data">

								<hr class="border-light m-0">

								<div class="card-body">

									<div class="form-group">
										<label class="form-label">Titulo Lección</label>
										<div class="clearfix"></div><br>
										<input type="hidden" class="form-control mb-1" name="id" value="<?=$curso['id_course']?>">
										<input type="hidden" class="form-control mb-1" name="id_teacher" value="<?=$teacher['id_teacher']?>">
										<input type="text" class="form-control mb-1" name="title" value="<?=$curso['name_course']?>">
										<div class="clearfix"></div><br>
									</div>
									<div class="form-group">
										<label class="floating-label" for="race">Carrera</label>
										<select class="select2-demo form-control" id="race" style="width: 100%" data-allow-clear="true" name="race_teacher" required>
											<option value="<?=$curso['carrera_course']?>"><?=$curso['carrera_course']?></option>
											<option value="ADMINISTRACIÓN DE OBRAS DE CONSTRUCCIÓN CIVIL">ADMINISTRACIÓN DE OBRAS DE CONSTRUCCIÓN CIVIL</option>
											<option value="DIBUJO ARQUITECTURA Y OBRAS CIVILES">DIBUJO ARQUITECTURA Y OBRAS CIVILES</option>
											<option value="DISEÑO DE INTERIORES">DISEÑO DE INTERIORES</option>
											<option value="DISEÑO DE INTERIORES(CARRERAS PLAN ANTERIOR)">DISEÑO DE INTERIORES(CARRERAS PLAN ANTERIOR)</option>
											<option value="EDIFICACIONESY OBRAS CIVILES">EDIFICACIONESY OBRAS CIVILES</option>
											<option value="GEODESIA Y TOPOGRAFÍA">GEODESIA Y TOPOGRAFÍA</option>
											<option value="GEOMÁTICA">GEOMÁTICA</option>
											<option value="GESTIÓN DE REDES DE AGUA POTABLE Y AGUA RESIDUAL">GESTIÓN DE REDES DE AGUA POTABLE Y AGUA RESIDUAL</option>
											<option value="LABORATORIO DE SUELOS, CONCRETO Y ASFALTO">LABORATORIO DE SUELOS, CONCRETO Y ASFALTO</option>
											<option value="CION DE OBRAS DE CONSTRUCCIÓN CIVIL CARRERAS VIRTUALES">CION DE OBRAS DE CONSTRUCCIÓN CIVIL CARRERAS VIRTUALES</option>
										</select>
									</div>
									<div class="form-group">
										<label class="floating-label" for="section">Secciones</label>
										<select class="select2-demo form-control" id="section" style="width: 100%" data-allow-clear="true" name="section_teacher">
											<option value="<?=$curso['ciclo_course']?>"><?=$curso['ciclo_course']?></option>
											<option value="I - A"> I - A</option>
											<option value="I - B"> I - B</option>
											<option value="I - C"> I - C</option>
											<option value="I - D"> I - D</option>
											<option value="I - E"> I - E</option>
											<option value="I - F"> I - F</option>
											<option value="I - G"> I - G</option>

											<option value="II - A"> II - A</option>
											<option value="II - B"> II - B</option>
											<option value="II - C"> II - C</option>
											<option value="II - D"> II - D</option>
											<option value="II - E"> II - E</option>
											<option value="II - F"> II - F</option>
											<option value="II - G"> II - G</option>

											<option value="III - A"> III - A</option>
											<option value="III - B"> III - B</option>
											<option value="III - C"> III - C</option>
											<option value="III - D"> III - D</option>
											<option value="III - E"> III - E</option>
											<option value="III - F"> III - F</option>
											<option value="III - G"> III - G</option>

											<option value="IV - A"> IV - A</option>
											<option value="IV - B"> IV - B</option>
											<option value="IV - C"> IV - C</option>
											<option value="IV - D"> IV - D</option>
											<option value="IV - E"> IV - E</option>
											<option value="IV - F"> IV - F</option>
											<option value="IV - G"> IV - G</option>

											<option value="V - A"> V - A</option>
											<option value="V - B"> V - B</option>
											<option value="V - C"> V - C</option>
											<option value="V - D"> V - D</option>
											<option value="V - E"> V - E</option>
											<option value="V - F"> V - F</option>
											<option value="V - G"> V - G</option>

											<option value="VI - A"> VI - A</option>
											<option value="VI - B"> VI - B</option>
											<option value="VI - C"> VI - C</option>
											<option value="VI - D"> VI - D</option>
											<option value="VI - E"> VI - E</option>
											<option value="VI - F"> VI - F</option>
											<option value="VI - G"> VI - G</option>

										</select>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="form-label">4 Documentos</label> &nbsp;&nbsp;&nbsp;
											<label class="switcher switcher-square">
												<?php if($curso['first_lesson'] == 1){ ?>
												<input type="checkbox" class="switcher-input" name="first" value="1" checked>
												<?php }else { ?>
												<input type="checkbox" class="switcher-input" name="first" value="1">
												<?php } ?>
												<span class="switcher-indicator">
													<span class="switcher-yes"></span>
													<span class="switcher-no"></span>
												</span>
												<span class="switcher-label"></span>
											</label>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col">
											<label class="form-label">Formato de Sesion</label> &nbsp;&nbsp;&nbsp;
											<label class="switcher switcher-square">
												<?php if($curso['second_lesson'] == 1){ ?>
												<input type="checkbox" class="switcher-input" name="second" value="1" checked>
												<?php }else { ?>
												<input type="checkbox" class="switcher-input" name="second" value="1">
												<?php } ?>
												<span class="switcher-indicator">
													<span class="switcher-yes"></span>
													<span class="switcher-no"></span>
												</span>
												<span class="switcher-label"></span>
											</label>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col">
											<label class="form-label">Enlace de la Clase</label> &nbsp;&nbsp;&nbsp;
											<label class="switcher switcher-square">
												<?php if($curso['third_lesson'] == 1){ ?>
												<input type="checkbox" class="switcher-input" name="third" value="1" checked>
												<?php }else { ?>
												<input type="checkbox" class="switcher-input" name="third" value="1">
												<?php } ?>
												<span class="switcher-indicator">
													<span class="switcher-yes"></span>
													<span class="switcher-no"></span>
												</span>
												<span class="switcher-label"></span>
											</label>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col">
											<label class="form-label">Enlace Grabación</label> &nbsp;&nbsp;&nbsp;
											<label class="switcher switcher-square">
												<?php if($curso['four_lesson'] == 1){ ?>
												<input type="checkbox" class="switcher-input" name="four" value="1" checked>
												<?php }else { ?>
												<input type="checkbox" class="switcher-input" name="four" value="1">
												<?php } ?>
												<span class="switcher-indicator">
													<span class="switcher-yes"></span>
													<span class="switcher-no"></span>
												</span>
												<span class="switcher-label"></span>
											</label>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="form-label">Material de Apoyo</label> &nbsp;&nbsp;&nbsp;
											<label class="switcher switcher-square">
												<?php if($curso['five_lesson'] == 1){ ?>
												<input type="checkbox" class="switcher-input" name="five" value="1" checked>
												<?php }else { ?>
												<input type="checkbox" class="switcher-input" name="five" value="1">
												<?php } ?>
												<span class="switcher-indicator">
													<span class="switcher-yes"></span>
													<span class="switcher-no"></span>
												</span>
												<span class="switcher-label"></span>
											</label>
										</div>
									</div>
								</div>
	


									<div class="text-right mt-3">
										<a href="https://sysweb.lavid.life/teacher?id=<?=$teacher['id_teacher']?>" class="btn btn-danger">Cancelar</a>&nbsp;
										<button class="btn btn-primary">Registrar curso</button>&nbsp;
									</div>
								</div>
								<form>
						</div>

					</div>

					<br>
				</div>
				<!-- [ content ] End -->

				<!-- [ Layout footer ] Start -->
				<nav class="layout-footer footer footer-light">
					<div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
						<div class="pt-3">

						</div>
					</div>
				</nav>
				<!-- [ Layout footer ] End -->

			</div>
			<!-- [ Layout content ] Start -->

		</div>
		<!-- [ Layout container ] End -->
	</div>
	<!-- Overlay -->
	<div class="layout-overlay layout-sidenav-toggle"></div>


</div>
<!-- [ Layout wrapper ] end -->

<!-- Core scripts -->
<script src="<?= base_url();?>assets/js/pace.js"></script>
<script src="<?= base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url();?>assets/libs/popper/popper.js"></script>
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>
<script src="<?= base_url();?>assets/js/sidenav.js"></script>
<script src="<?= base_url();?>assets/js/layout-helpers.js"></script>
<script src="<?= base_url();?>assets/js/material-ripple.js"></script>

<!-- Libs -->
<script src="<?= base_url();?>assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url();?>assets/libs/select2/select2.js"></script>
<script src="<?= base_url();?>assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= base_url();?>assets\libs\autosize\autosize.js"></script>
<script src="<?= base_url();?>assets\libs\vanilla-text-mask\vanilla-text-mask.js"></script>
<script src="<?= base_url();?>assets\libs\vanilla-text-mask\text-mask-addons.js"></script>
<script src="<?= base_url();?>assets\libs\knob\knob.js"></script>
<script src="<?= base_url();?>assets\libs\bootstrap-maxlength\bootstrap-maxlength.js"></script>
<script src="<?= base_url();?>assets\libs\pwstrength-bootstrap\pwstrength-bootstrap.js"></script>
<script src="<?= base_url();?>assets\libs\bootstrap-select\bootstrap-select.js"></script>
<script src="<?= base_url();?>assets\libs\growl\growl.js"></script>
<script src="<?= base_url();?>assets\libs\toastr\toastr.js"></script>
<!-- Demo -->
<script src="<?= base_url();?>assets/js/demo.js"></script>
<script src="<?= base_url();?>assets/js/analytics.js"></script>
<script src="<?= base_url();?>assets/js/pages/pages_account-settings.js"></script>
<script src="<?= base_url();?>assets/js/pages/forms_extras.js"></script>
<script src="<?= base_url();?>assets\js\pages\forms_selects.js"></script>
<script src="<?= base_url();?>assets\js\pages\ui_notifications.js"></script>
</body>
