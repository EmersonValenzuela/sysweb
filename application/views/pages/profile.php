                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Perfil</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Perfil</li>
                            </ol>
                        </div>
                        <div class="nav-tabs-top">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#user-edit-account">Cuenta</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="user-edit-account">
                                <form action="<?= base_url(); ?>profile/editImage" method="post" enctype="multipart/form-data">    

                                    <div class="card-body">

                                        <div class="media align-items-center">
                                            <img src="<?= base_url(); ?>assets/img/avatars/<?= $user['img_user']?>" id="img" alt="" class="d-block ui-w-80">
                                            <div class="media-body ml-3">
                                                <label class="form-label d-block mb-2">Elegir Imagen</label>
                                                <label class="btn btn-outline-primary btn-sm" for="upload">
                                                    Cambiar
                                                    <input type="file" class="user-edit-fileinput" id="upload" name="avatar" value="<?= $user['img_user']?>">
                                                </label>&nbsp;
                                            </div>
                                        </div>

                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body pb-2">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" value="<?=$user['name_user'] ?>" name="name_user">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">E-mail</label>
                                                    <input type="text" class="form-control mb-1" value="<?=$user['email_user'] ?>" name="email_user">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Contraseña</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="password_user" value="<?=$user['password_user'] ?>" id="txtPassword">
                                                        <span class="input-group-prepend">
                                                        <button class="btn btn-secondary" type="button" id="btnToggle"><i id="eyeIcon"  class="fas fa-eye" ></i></button>
                                                            <div class="clearfix"></div>
                                                        </span>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <div class="text-right mt-3">
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>&nbsp;
                                            </div>
                                        </form>

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- [ content ] End -->


                </div>
                <!-- [ Layout content ] Start -->
    <!-- Core scripts -->
    <script src="<?= base_url()?>assets\js\pace.js"></script>
    <script src="<?= base_url()?>assets\js\jquery-3.3.1.min.js"></script>
    <script src="<?= base_url()?>assets\libs\popper\popper.js"></script>
    <script src="<?= base_url()?>assets\js\bootstrap.js"></script>
    <script src="<?= base_url()?>assets\js\sidenav.js"></script>
    <script src="<?= base_url()?>assets\js\layout-helpers.js"></script>
    <script src="<?= base_url()?>assets\js\material-ripple.js"></script>

    <!-- Libs -->
    <script src="<?= base_url()?>assets\libs\perfect-scrollbar\perfect-scrollbar.js"></script>
    <script src="<?= base_url()?>assets\libs\select2\select2.js"></script>
    <script src="<?= base_url()?>assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.js"></script>
    <script src="<?= base_url()?>assets\libs\toastr\toastr.js"></script>


    <!-- Demo -->
    </script><script src="<?= base_url()?>assets\js\analytics.js"></script>
    <script src="<?= base_url()?>assets\js\pages\pages_users_edit.js"></script>
    <script src="<?= base_url()?>assets\js\pages\"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script>

    </script>



        </body>

    </html>