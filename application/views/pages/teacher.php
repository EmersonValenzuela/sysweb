<style>
	.top-elements {
		height: 3em;
		width: 100%;
		color: white;
		text-align: center;
		line-height: 3em;
	}

	.red {
		background-color: red;
	}

	.green {
		background-color: green;
	}

	.rest {
		background: rgba(134, 156, 173, .7);
		width: 100%;
		height: 100vh;
		top: 0px;
	}

	.main-button {
		margin: 25% 41%;
	}

	/* .fade.in {top:10.4%;} */
	.btn-main {
		background-color: #E85365;
		border: none;
		color: white;
		padding: .5em 1.75em;
	}

	.btn-default {
		background: none;
		border: none;
		color: #3975cc;
		padding: .5em 1.75em;
		margin-right: 1.5em;
	}

	.modal-dialog {
		margin: 100px auto;
	}

	.modal-header {
		border-bottom: transparent;
		padding: 1em 1em;
	}

	.modal-body {
		padding: 0em 4em;
		margin-top: -.5em;
	}

	.modal-footer {
		border-top: transparent;
		padding: 1.5em 3em 2.5em 0em;
	}
</style>

<!-- [ Layout content ] Start -->

<div class="layout-content">

	<!-- [ content ] Start -->
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="font-weight-bold py-3 mb-0">Perfil Docente</h4>
		<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="feather icon-home"></i></a></li>
				<li class="breadcrumb-item active">Perfil Docente</li>
			</ol>
		</div>

		<div class="media align-items-center py-3 mb-3">

			<div class="media-body ml-4">
				<h4 class="font-weight-bold mb-0"><?=$teacher['name_teacher']?></h4>
				<div class="text-muted mb-2"></div>
				<a href="<?= base_url()?>pdf?id=<?=$teacher['id_teacher']?>" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; PDF</a>

			</div>
			<button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-course"><i class="feather icon-plus"></i> Agregar Curso</button>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- Content -->
				<div class="container-fluid flex-grow-1 container-p-y">

					<div class="bg-lightest container-m--x container-m--y mb-3">

						<hr class="m-0">

						<div class="file-manager-actions container-p-x py-2">
							<div>
								<button type="button" class="btn btn-primary mr-2"  data-toggle="modal" data-target="#modal-file">
									<i class="ion ion-md-cloud-upload"></i>&nbsp; Subir Archivo</button>
								</button>
							</div>
							<div>
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn btn-default md-btn-flat active">
										<input type="radio" name="file-manager-view" value="file-manager-col-view" checked="">
										<span class="ion ion-md-apps"></span>
									</label>
									<label class="btn btn-default md-btn-flat">
										<input type="radio" name="file-manager-view" value="file-manager-row-view">
										<span class="ion ion-md-menu"></span>
									</label>
								</div>
							</div>
						</div>

						<hr class="m-0">
					</div>

					<div class="file-manager-container file-manager-col-view">

						<div class="file-manager-row-header">
							<div class="file-item-name pb-2">Nombre de Archivo</div>
							<div class="file-item-changed pb-2">Fecha</div>
						</div>

						<?php foreach ($files as $file) {
							$extension = $file['extension'];
							$icon="";
							switch ($extension) {
								case 'doc':
									$icon = "far fa-file-word";
									break;
									case 'docx':
										$icon = "far fa-file-word";
										break;
									case 'html':
										$icon = "fab fa-html5";
										break;
										case 'js':
											$icon = "fab fa-js";
											break;
											case 'pdf':
												$icon = "far fa-file-pdf";
												break;
												case 'txt':
													$icon = "far fa-file-alt";
													break;
													case 'css':
														$icon = "fab fa-css3";
														break;
														case 'mp3':
															$icon = "far fa-file-audio";
															break;
															case 'avi':
																$icon = "far fa-file-video";
																break;
																case 'mp4':
																	$icon = "far fa-file-video";
																	break;
								default:
								$icon = "far fa-file";
									break;
							}
							?>
							<div class="file-item">
								<div class="file-item-select-bg bg-primary"></div>
								<label class="file-item-checkbox custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-label"></span>
								</label>
								<div class="file-item-icon <?= $icon;?> text-secondary"></div>
								<a href="javascript:void(0)" class="file-item-name">
									<?=$file['file_name']; ?>
								</a>
								<div class="file-item-changed"><?php echo fecha($file['created']); ?></div>
								<div class="file-item-actions btn-group">
									<button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
										<i class="ion ion-ios-more"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="<?=base_url()?>teacher/download?id_file=<?=$file['id_file']?>&id_teacher=<?=$file['teacher']?>">Descargar</a>
										<a class="dropdown-item" href="<?=base_url()?>teacher/deletfile?id_file=<?=$file['id_file']?>&id_teacher=<?=$file['teacher']?>">Eliminar</a>
									</div>
								</div>
							</div>

						<?php
						} ?>



					</div>

				</div>
				<!-- / Content -->
			</div>
		</div>

		<div class="card mb-4">

			<hr class="border-light m-0">
			<div class="table-responsive">
				<table class="table card-table m-0 table-dark">
					<tbody>
						<tr>
							<th style="visibility:hidden" width="1%"></th>

							<th>CARRERA</th>
							<th>CICLO Y SECCIÓN</th>

							<th>NOMBRE DEL CURSO</th>
							<th>ACCIONES</th>
						</tr>
						<?php
                          											foreach($cursos as $curso){
                          										?>
						<tr>
							<td style="visibility:hidden" width="1%"><?=$curso['id_course']?></td>
							<td><?=$curso['carrera_course']?></td>
							<td><?=$curso['ciclo_course']?></td>
							<td><?=$curso['name_course']?></td>
							<?php if ($curso['first_lesson'] == "1" && $curso['second_lesson'] =="1" && $curso['third_lesson'] == "1" && $curso['four_lesson'] == "1" && $curso['five_lesson'] == "1") {?>
							<td>
								<span class="badge badge-success">COMPLETO</span>
							</td>
							<?php }else{ ?>
							<td>
								<span class="badge badge-danger">INCOMPLETO</span>
							</td>
							<?php } ?>
							<td>
								<a href="<?= base_url()?>lesson?id=<?=$curso['teacher']?>&id_course=<?=$curso['id_course']?>" class="btn btn-round btn-outline-warning">EDITAR</a>
								<button class="btn btn-round btn-outline-danger deletebtn" data-toggle="modal" data-target="#delete">Eliminar</button>
							</td>
						</tr>
						<?php
                        											}
                        										?>

					</tbody>
				</table>
			</div>
			<hr class="border-light m-0">

		</div>

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
<div class="modal modal-top fade" id="modal-course" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Agregar Curso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url()?>teacher/addcourse" method="post">
					<div class="row">

						<div class="col-sm-12">
							<div class="form-group">Docente</label>
								<input type="hidden" name="id_teacher" value="<?=$teacher["id_teacher"]?>">
								<input type="text" class="form-control" name="name_teacher" disabled value="<?=$teacher["name_teacher"]?>" required>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label class="floating-label" for="race">Carrera</label>
								<select class="select2-demo form-control" id="race" style="width: 100%" data-allow-clear="true" name="race_teacher" required>
									<option>. . .</option>
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
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="floating-label" for="section">Secciones</label>
								<select class="select2-demo form-control" id="section" style="width: 100%" data-allow-clear="true" name="section_teacher">
									<option>. . .</option>

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
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label class="floating-label" for="Price">Curso</label>
								<input type="text" class="form-control" id="Price" placeholder="" name="name_course" required>
							</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-primary">Guardar</button>
							<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Modal Delete-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<!--           <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
			</div>
			<form action="<?= base_url(); ?>teacher/delcourse" method="post">
				<input type="hidden" value="<?=$teacher['id_teacher'] ?>" name="id">
				<input type="hidden" value="" name="delete_id" id="delete_id">
				<div class="modal-body">
					<h4>Deseas Eliminar La Lección?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button class="btn btn-main">Eliminar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal template -->
<div class="modal modal-top fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Subir Archivos
					<br>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
			</div>
			<form class="" action="<?= base_url(); ?>teacher/addfile" method="post" enctype="multipart/form-data">
				<input type="hidden" value="<?=$teacher['id_teacher'] ?>" name="id">
			<div class="modal-body">
				<div class="form-row">
					<div class="form-group col">
						<label class="form-label">Nombre del Archivo</label>
						<input type="text" class="form-control" placeholder="" name="name">
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col mb-0">
						<label class="form-label">Seleccionar Archivo</label>
						<input type="file" class="form-control" placeholder="" name="file_name">
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-default" data-dismiss="modal" value="Cerrar">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</form>
	</div>
</div>
</div>




</div>
<!-- Core scripts -->
<script src="<?= base_url()?>assets\js\pace.js"></script>
<script src="<?= base_url()?>assets\js\jquery-3.3.1.min.js"></script>
<script src="<?= base_url()?>assets\libs\popper\popper.js"></script>
<script src="<?= base_url()?>assets\js\bootstrap.js"></script>
<script src="<?= base_url()?>assets\js\sidenav.js"></script>
<script src="<?= base_url()?>assets\js\layout-helpers.js"></script>
<script src="<?= base_url()?>assets\js\material-ripple.js"></script>

<!-- Libs -->
<script src="<?= base_url()?>assets\libs\datatables\datatables.js"></script>
<script src="<?= base_url()?>assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>
<script src="<?= base_url()?>assets\libs\bootstrap-select\bootstrap-select.js"></script>
<script src="<?= base_url()?>assets\libs\bootstrap-multiselect\bootstrap-multiselect.js"></script>
<script src="<?= base_url()?>assets\libs\select2\select2.js"></script>
<script src="<?= base_url()?>assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.js"></script>
<script src="<?= base_url()?>assets\libs\autosize\autosize.js"></script>
<script src="<?= base_url()?>assets\libs\vanilla-text-mask\vanilla-text-mask.js"></script>
<script src="<?= base_url()?>assets\libs\vanilla-text-mask\text-mask-addons.js"></script>
<script src="<?= base_url()?>assets\libs\knob\knob.js"></script>
<script src="<?= base_url()?>assets\libs\bootstrap-maxlength\bootstrap-maxlength.js"></script>
<!-- Demo -->

<script src="<?= base_url()?>assets\js\analytics.js"></script>
<script src="<?= base_url()?>assets\js\pages\forms_selects.js"></script>
<script src="<?= base_url()?>assets\libs\autosize\autosize.js"></script>
<script src="<?= base_url()?>assets\js\pages\forms_extras.js"></script>

<script src="<?= base_url()?>assets\libs\dropzone\dropzone.js"></script>
<script src="<?= base_url()?>assets\libs\flow-js\flow.js"></script>
<script src="<?= base_url()?>assets\js\pages\forms_file-upload.js"></script>
<!-- Demo -->
<script src="<?= base_url()?>assets/js/analytics.js"></script>
<script>
	//Delete

	$('.deletebtn').on('click', function() {

		$tr = $(this).closest('tr');
		var datosEliminar = $tr.children('td').map(function() {
			return $(this).text();
		});

		$('#delete_id').val(datosEliminar[0]);
	});
</script>
<script>
	$(function() {

		// Checkboxes

		$('.file-manager-container').on('change', '.file-item-checkbox input', function() {
			$(this).parents('.file-item')[this.checked ? 'addClass' : 'removeClass']('selected');
		});

		// Focus

		$('.file-manager-container').on('focusin', '.file-item', function() {
			$(this).addClass('focused');
		});

		$('.file-manager-container').on('focusout', '.file-item', function() {
			if ($('.file-item-actions.show').length) return;
			$(this).removeClass('focused');
		});

		$('.file-manager-container').on('hide.bs.dropdown', '.file-item-actions', function() {
			if ($(this).parents('.file-item').find(':focus').length) return;
			$(this).parents('.file-item').removeClass('focused');
		});

		// Change view

		$('[name="file-manager-view"]').on('change', function() {
			$('.file-manager-container')
				.removeClass('file-manager-col-view file-manager-row-view')
				.addClass(this.value);
		});

		// RTL

		if ($('html').attr('dir') === 'rtl') {
			$('.file-manager-actions .dropdown-menu').addClass('dropdown-menu-right');
			$('.file-item-actions .dropdown-menu').removeClass('dropdown-menu-right');
		}

	});
</script>

</body>

</html>
