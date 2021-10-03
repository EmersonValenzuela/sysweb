

                <style>
                    .top-elements {
                    height: 3em;
                    width: 100%;
                    color:white;
                    text-align: center;
                    line-height:3em;
                    }
                    .red {background-color:red;}
                    .green {background-color:green;}
                    .rest {
                    background: rgba(134,156,173,.7);
                    width: 100%;
                    height: 100vh;
                    top:0px;
                    }
                    .main-button {margin: 25% 41%;}
                    /* .fade.in {top:10.4%;} */
                    .btn-main {background-color:#E85365;border:none;color:white;padding:.5em 1.75em;}
                    .btn-default {background:none;border:none;color:#3975cc;padding:.5em 1.75em;margin-right:1.5em;}
                    .modal-dialog {margin: 100px auto;}
                    .modal-header {border-bottom: transparent;padding:1em 1em;}


                    .modal-footer {border-top:transparent;padding:1.5em 3em 2.5em 0em;}
                </style>

                <!-- [ Layout content ] Start -->
                <div class="layout-content">
                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">

                        <h4 class="font-weight-bold py-3 mb-0">Docentes</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Docentes</a></li>
                               

                            </ol>
                        </div>
                        <div class="row">
                            <!-- customar project  start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Agregar Profesor</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table mb-0">
                                                <thead class="thead-light">
                                                    <tr>
														<th style="display:none;"></th>
                                                        <th>N#</th>
                                                        <th>Docente</th>
                                                        <th>DNI</th>
                                                        <th>Correo Institucional</th>
                                                        <th>RUC</th>
                                                        <th>Correo Personal</th>                 <th>Dirección</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
													<?php
														$c=1;

													foreach($teachers as $teacher){
														?>
                                                    <tr>
														<td  style="display:none;"><?=$teacher['id_teacher']?></td>
														<td><?php echo $c++; ?></td>
                                                        <td class="align-middle" width="5%">
														<?=$teacher['name_teacher']?>
                                                        </td>
                                                        <td class="align-middle">
														<?=$teacher['dni_teacher']?>
                                                        </td>
                                                        <td class="align-middle">
														<?=$teacher['email_teacher']?>
                                                        </td>
                                                        <td class="align-middle">
														<?=$teacher['ruc_teacher']?>
                                                        </td>
                                                        <td class="align-middle">
														<?=$teacher['cp_teacher']?>
                                                        </td>
                                                                                                <td class="align-middle">
														<?=$teacher['direction_teacher']?>
                                                        </td>
                                                        <td class="table-action">

                                                            <a href="<?= base_url()?>teacher?id=<?=$teacher['id_teacher']?>" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                                            <a href="#!" class="btn btn-icon btn-outline-danger deletebtn" data-toggle="modal" data-target="#delete"><i class="feather icon-trash-2"></i></a>
                                                        </td>
                                                    </tr>
													<?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- customar project  end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->
    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Docente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url()?>index/addteacher" method="post">
                        <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label class="floating-label" for="Price">Nombre Docente</label>
                                  <input type="text" class="form-control" id="Price" placeholder="" name="name_teacher">
                              </div>
                          </div>
							<div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="dni">Documento de Identidad</label>
                                    <input type="text" class="form-control bootstrap-maxlength-example" maxlength="8" name="dni_teacher">

                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="Price">Correo Institucional</label>
                                    <input type="text" class="form-control" id="Price" placeholder="" name="email_teacher">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="ruc">RUC</label>
                                    <input type="text" class="form-control" id="ruc" placeholder="" name="ruc_teacher">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="cp">Correo Personal</label>
                                    <input type="text" class="form-control" id="cp" placeholder="" name="cp_teacher">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="dt">Dirección</label>
                                    <input type="text" class="form-control" id="dt" placeholder="" name="direction_teacher">
                                </div>
                            </div>

                            <div class="col-sm-12">
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
                                        <form action="<?= base_url(); ?>index/deleteteacher" method="post">

                                        <input type="hidden" value="" name="delete_id" id="delete_id">
                                        <div class="modal-body">
                                        <h4>Deseas Eliminar El Curso?</h4>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-main">Eliminar</button>
                                        </div>
                                        </form>
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
	<script src="assets\libs\vanilla-text-mask\vanilla-text-mask.js"></script>
    <script src="assets\libs\vanilla-text-mask\text-mask-addons.js"></script>
    <script src="assets\libs\knob\knob.js"></script>
    <script src="assets\libs\bootstrap-maxlength\bootstrap-maxlength.js"></script>
    <!-- Demo -->

	<script src="<?= base_url()?>assets\js\analytics.js"></script>
	<script src="<?= base_url()?>assets\js\pages\forms_selects.js"></script>
	<script src="<?= base_url()?>assets\libs\autosize\autosize.js"></script>
    <script src="<?= base_url()?>assets\js\pages\forms_extras.js"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
        // DataTable end


		        //Delete

				$('.deletebtn').on('click', function(){

  				$tr = $(this).closest('tr');
				var datosEliminar = $tr.children('td').map(function() {
				return $(this).text();
				});

				$('#delete_id').val(datosEliminar[0]);
				});
    </script>
</body>

</html>
