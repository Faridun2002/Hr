<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Главная страница</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">


    <!-- DataTables -->
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />


    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">



    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-end">

                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="../assets/images/users/avatar-5.jpg" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1">Рухшона</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
  
                                    <a class="dropdown-item text-danger" href="login.php"><i
                                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                        Выйти</a>
                                </div>
                            </div>
                        </div>

                        <!-- LOGO -->
                        <div>

                            <div class="navbar-brand-box">
                                <a href="index.php" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="../assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.php" class="logo logo-light" style="margin-left: 65px;">
                                    <span class="logo-sm">
                                        <img src="../assets/images/LogoEX.png" alt="" height="20"
                                            style="border-radius: 50%;">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="../assets/images/LogoEX.png" alt="" height="57"
                                            style="border-radius: 10%;">
                                    </span>
                                </a>

                            </div>

                            <button type="button"
                                class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                                id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>
                    </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div class="h-100">

                    <div class="user-wid text-center py-4">
                        <div class="user-img">
                            <img src="../assets/images/users/avatar-5.jpg" alt=""
                                class="avatar-md mx-auto rounded-circle">
                        </div>

                        <div class="mt-3">

                            <a href="#" class="text-reset fw-medium font-size-16">Салимова Рухшона</a>
                            <p class="text-muted mt-1 mb-0 font-size-13">Начальник отдела кадров</p>

                        </div>
                    </div>

                 <!--- Sidemenu -->
                 <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Меню</li>

                        <li>
                            <a href="index.php" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span>Панель приборов</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-group"></i>
                                <span>Сотрудники</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="add-employee.php">Добавить сотрудника</a></li>
                                <li><a href="edit-employee.php">Управлять сотрудниками</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-paper-plane"></i>
                                <span>Заявки</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="leave.php">Посмотреть заявки</a></li>
                                <li><a href="list-leave.php">Список заявок</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-briefcase"></i>
                                <span>Вакансия</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="add-vacancies.php">Добавить вакансию</a></li>
                                <li><a href="vacancies.php">Посмотреть вакансию</a></li>
                                <li><a href="edit-vacancies.php">Редактировать вакансию</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-list-check"></i>
                                <span>Обучение</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ekzamen.php">Экзамен</a></li>
                                <li><a href="anketirovanie.php">Анкетирование</a></li>
                                <li><a href="attestaticy.php">Аттестация</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-task"></i>
                                <span>План</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="add-plan.php">Создать план</a></li>
                                <li><a href="approve-plan.php">Утвердить план</a></li>
                                <li><a href="plan.php">Текущий план</a></li>
                            </ul>
                        </li>

                   

                </div>
                <!-- Sidebar -->
                </div>
            </div>