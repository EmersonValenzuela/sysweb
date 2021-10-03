<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>SISTEMAS DE DOCENTES SYSWEB</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Pro Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs.">
    <meta name="keywords" content="admin template, bootstrap admin template, bootstrap dashboard, admin theme, dashboard template, bootstrap dashboard template, bootstrap admin panel, dashboard theme, best admin template, dashboard theme, website templates, bootstrap 4 admin template">
    <meta name="author" content="Codedthemes">
    <link rel="icon" type="image/x-icon" href="assets\img\favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets\fonts\fontawesome.css">
    <link rel="stylesheet" href="assets\fonts\ionicons.css">
    <link rel="stylesheet" href="assets\fonts\linearicons.css">
    <link rel="stylesheet" href="assets\fonts\open-iconic.css">
    <link rel="stylesheet" href="assets\fonts\pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets\fonts\feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="assets\css\bootstrap-material.css">
    <link rel="stylesheet" href="assets\css\shreerang-material.css">
    <link rel="stylesheet" href="assets\css\uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="assets\libs\perfect-scrollbar\perfect-scrollbar.css">
    <style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <!-- Content -->

    <div class="invoice-print p-5">
        <div class="row">
            <div class="col-sm-6 pb-4">
                <div class="media align-items-center mb-4">
                    <a href="" class="navbar-brand app-brand demo py-0 mr-4">

					<h6 class="text-big text-large font-weight-bold mb-3">Registro De Docente</h6>

                    </a>
                </div>
				<span class="app-brand-text demo font-weight-bold text-dark ml-2"><?=strtoupper($teacher['name_teacher'])?></span>
            </div>
            <div class="col-sm-6 text-right pb-4">

                <div class="mb-1">Fecha:
                    <strong class="font-weight-semibold">
					<?php
            $fecha = date(DATE_W3C);

            echo fecha($fecha);
					?></strong>

                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row">

            <div class="col-sm-6 mb-4">
                <div class="font-weight-bold mb-2">DATOS REPORTE:</div>
                <table>
                    <tbody>
                        <tr>
                            <td class="pr-3">DNI:</td>
                            <td>
                                <strong><?=$teacher['dni_teacher']?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-3">EMAIL:</td>
                            <td><?=$teacher['email_teacher']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-responsive mb-4">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th class="py-3">
                            CARRERA
                        </th>
						<th class="py-3">
                      CICLO Y SECCIÓN
							</th>
              <th class="py-3">
                        NOMBRE CURSO
                </th>

                        <th class="py-3">
                            ESTADO
                        </th>
						<th class="py-3">

                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
					<?php
											foreach($cursos as $curso){


										?>
                        <td class="py-3">
                            <div class="font-weight-semibold"><?=$curso['carrera_course']?></div>

                        </td>

                            <td class="py-3">
                                <div class="font-weight-semibold"><?=$curso['ciclo_course']?></div>

                            </td>

                                <td class="py-3">
                                    <div class="font-weight-semibold"><?=$curso['name_course']?></div>

                                </td>

                                <?php if ($curso['first_lesson'] == "1" && $curso['second_lesson'] =="1" && $curso['third_lesson'] == "1" && $curso['four_lesson'] == "1" && $curso['five_lesson'] == "1") {?>
                                            <td class="py-3">
                                                <strong>COMPLETO</strong>
                                            </td>
                    						<?php }else{ ?>
                    						<td class="py-3">
                                                <strong>INCOMPLETO</strong>
                                            </td>
                    						<?php } ?>

						<td class="py-3">
                            <strong></strong>
                        </td>

                    </tr>
					<?php
											}
										?>

                </tbody>
            </table>
        </div>

    </div>

    <!-- / Content -->

    <!-- Core scripts -->
    <script src="assets\js\pace.js"></script>
    <script src="assets\js\jquery-3.3.1.min.js"></script>
    <script src="assets\js\material-ripple.js"></script>
    <script src="assets\js\layout-helpers.js"></script>
    <script src="assets\libs\popper\popper.js"></script>
    <script src="assets\js\bootstrap.js"></script>
    <script src="assets\js\sidenav.js"></script>

    <!-- Libs -->
    <script src="assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>

    <!-- Demo -->
    <script src="assets\js\demo.js"></script><script src="assets\js\analytics.js"></script>
    <script>
        // -------------------------------------------------------------------------
        // Print on window load

        $(function() {
            window.print();
        });
    </script>
</body>

</html>
