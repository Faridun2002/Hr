<?php 
require_once "header.php";
?>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Профиль</h4>
            

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- start row -->
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-widgets py-3">
                            <div class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="position-relative">
                                        <img src="../assets/images/users/avatar-7.jpg" alt=""
                                            class="avatar-lg mx-auto img-thumbnail rounded-circle"
                                            style="width: 150px; height: 150px;">
                                        <div class="online-circle"
                                            style="position: absolute; right: -50px; top: 100px;">
                                            <i class="fas fa-circle text-success"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <a href="#" class="text-reset fw-medium font-size-20">Ахмедов Анвар</a>
                                    <p class="text-body mt-1 mb-1">Преподаватель</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h2>Личная Информация</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Почта:</p>
                                    <h5 class="">Ahmedov@gmail.com</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Номер телефона:</p>
                                    <h5 class="">+992 92929292</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Должность:</p>
                                    <h5 class="">Преподователь</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Степень:</p>
                                    <h5 class="">Кандидат наук</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Факультет:</p>
                                    <h5 class="">Информатика и энергетика</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Кафедры:</p>
                                    <h5 class="">Программирование и информационная система</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Табельный номер:</p>
                                    <h5 class="">12345</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Дата рождения:</p>
                                    <h5 class="">12.01.1995</h5>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-16 text-muted mb-1">Место рождения:</p>
                                    <h5 class="">Худжанд</h5>
                                </div>
                            </div>
                        </div>

                        <div class="button-items mt-3 text-center">
                            <a href="edit-profile.php" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bx-user-pin font-size-16 align-middle me-2"></i> Изменить профиль
                            </a>
                        </div>

                    </div>

                </div>
            </div>


        </div>

        <!-- end row -->

    </div>

    <?php 
require_once "footer.php";
?>