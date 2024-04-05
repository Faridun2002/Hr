<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Starter | Qovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">



    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <div class="container-fluid">
            <!-- Begin page -->
            <div id="layout-wrapper">
    
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <div class="float-end">
    
                                <div class="dropdown d-none d-lg-inline-block ms-1">
                                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                        <i class="mdi mdi-fullscreen"></i>
                                    </button>
                                </div>
    
                                <div class="dropdown d-inline-block">
                                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                            alt="Header Avatar">
                                        <span class="d-none d-xl-inline-block ms-1">Patrick</span>
                                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a class="dropdown-item" href="profile.html"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                            Профиль</a>
                                        <a class="dropdown-item d-block" href="setting.html"><span class="badge bg-success float-end"></span><i
                                                class="bx bx-wrench font-size-16 align-middle me-1"></i> Настройка</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="login.html"><i
                                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Выйти</a>
                                    </div>
                                </div>
    
                                <!-- <div class="dropdown d-inline-block">
                                    <button  type="button" class="btn header-item noti-icon right-bar-toggle waves-effect" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </button>
                                </div> -->
    
                            </div>
                            <div>
                                <!-- LOGO -->
                                <div class="navbar-brand-box">
                                    <a href="index.html" class="logo logo-dark">
                                        <span class="logo-sm">
                                            <img src="assets/images/logo-sm.png" alt="" height="20">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-dark.png" alt="" height="17">
                                        </span>
                                    </a>
    
                                    <a href="index.html" class="logo logo-light">
                                        <span class="logo-sm">
                                            <img src="assets/images/logo-sm.png" alt="" height="20">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-light.png" alt="" height="19">
                                        </span>
                                    </a>
                                </div>
    
                                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
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
                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-reset fw-medium font-size-16">Patrick Becker</a>
                <p class="text-muted mt-1 mb-0 font-size-13">Админ</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Меню</li>
                
                <li>
                    <a href="index.html" class="waves-effect">
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
                        <li><a href="add-employee.html">Добавить сотрудника</a></li>
                        <li><a href="edit-employee.html">Управлять сотрудниками</a></li>
                    </ul>
                </li>
           
           
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-paper-plane"></i>
                        <span>Заявки</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="leave.html">Посмотреть заявки</a></li>
                        <li><a href="edit-leave.html">Управлять заявками</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-briefcase"></i>
                        <span>Вакансия</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="add-vacancies.html">Добавить вакансию</a></li>
                        <li><a href="vacancies.html">Посмотреть вакансию</a></li>
                        <li><a href="edit-vacancies.html">Редактировать вакансию</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-check"></i>
                        <span>Обучение</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ekzamen.html">Экзамен</a></li>
                        <li><a href="anketirovanie.html">Анкетирование</a></li>
                        <li><a href="attestaticy.html">Аттестация</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span>План</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="add-plan.html">Создать план</a></li>
                        <li><a href="edit-plan.html">Утвердить план</a></li>
                        <li><a href="plan.html">Текущий план</a></li>
                    </ul>
                </li>

                <li>
                    <a href="login.html" class="waves-effect">
                        <i class="bx bx-log-out"></i>
                        <span>Выйти</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                            </ul>
                        </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
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
                            <h4 class="page-title mb-0 font-size-18">Начальное окно</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Страницы</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark mb-0">

                                <!-- <h1 class="card-title">Рейтинг сотрудников</h1> -->
                                <h2>Рейтинг сотрудников</h2>
                            
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th class="text-center">ФИО</th>
                                                <th>Степень</th>
                                                <th>Кредит</th>
                                                <th>Баллы</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                // Database connection parameters
                                                $servername = "localhost"; // Change this to your MySQL server hostname
                                                $username = "root"; // Change this to your MySQL username
                                                $password = "root"; // Change this to your MySQL password
                                                $database = "university_hr"; // Change this to your MySQL database name

                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $database);

                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // SELECT query
                                                $sql = "select r.Rating_Id as Id, IFNULL(e.Path_Photo, '') as Path, e.Full_Name as FullName,pos.Position_Name as Position,CONCAT(r.Credit_Done, '/', r.Credit_Full) as Credit,r.Rating from ratings r
                                                left join employees e on r.Employee_Id = e.Employee_Id
                                                left join positions pos on e.Employee_Id = pos.Position_Id
                                                order by Rating desc";

                                                // Execute query
                                                $result = $conn->query($sql);
                                                $count =0;
                                                // Check if there are any results
                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $count++;
                                                        if ($row["Path"] == "") {
                                                            $row["Path"]= "default-icon.jpg";
                                                        }
                                                        echo "<tr>".
                                                            "   <td class='align-middle'>".$count."</td>".
                                                            "   <td class='align-middle'>".
                                                            "   <div class='d-flex align-items-center'>".
                                                            "       <div class='me-4'> ".
                                                            "           <img src='Photo/".$row["Path"]."' alt='' class='avatar-sm rounded-circle'>".
                                                            "       </div>".
                                                            "       <div>".
                                                            "           <h5 class='font-size-16 mb-1'>".$row["FullName"]."</h5>".
                                                            "       </div>".
                                                            "   </div>".
                                                            "    </td>".
                                                            "   <td class='align-middle'>".$row["Position"]."</td>".
                                                            "   <td class='align-middle'>".$row["Credit"]."</td>".
                                                            "   <td class='align-middle'>".$row["Rating"]."</td>".
                                                            "</tr>";
                                                    }
                                                }

                                                // Close connection
                                                $conn->close();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            <!-- End Page-content -->
                        
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Qovex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- Right Sidebar -->

<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body rightbar">
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end" data-bs-dismiss="offcanvas" aria-label="Close" >
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>
            
            </div>
            <!-- end slimscroll-menu-->
        </div>
    </div>
   
</div>


<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>



<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- apexcharts init -->
<script src="assets/js/pages/apexcharts.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>