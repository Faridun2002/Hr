<?php

require_once "conn.php";

// Шаг 3: Проверка учетных данных
$username = $_POST['username'];
$password = $_POST['password'];

// Проверка учетных данных в базе данных
// Замените это на вашу собственную логику проверки учетных данных
$user = getUserByUsernameAndPassword($username, $password);

if ($user) {
    // Шаг 4: Установка сессии
    session_start();
    $_SESSION['User_Role_Id'] = $user['id'];
    $_SESSION['User_Type'] = $user['role'];

    // Шаг 5: Редирект на соответствующую страницу
    if ($user['role'] == 'Директор') {
        header('Location: /Director/index.php');
    } elseif ($user['role'] == 'Сотрудник') {
        header('Location: /Personal/index.php');
    }  elseif ($user['role'] == 'Начальник отдела кадров') {
        header('Location: /HR/index.php');
    } 
    else {
        header('Location: /University_HR/index.php');
    }
    exit();
} else {
    // Ошибка аутентификации
    echo "Неверное имя пользователя или пароль";
}

// Шаг 6: Проверка доступа к страницам
session_start();
if (!isset($_SESSION['user_id'])) {
    // Пользователь не вошел в систему, перенаправляем его на страницу входа
    header('Location: login.php');
    exit();
}

// Проверка доступа текущего пользователя к странице
$allowed_roles = ['Директор', 'Сотрудник', 'Начальник отдела кадров', 'Админ']; // Роли с доступом к этой странице
if (!in_array($_SESSION['user_role'], $allowed_roles)) {
    // У пользователя нет доступа к этой странице
    echo "У вас нет доступа к этой странице";
    exit();
}

// Шаг 7: Создание выхода из системы
session_start();
session_destroy();
header('Location: login.php');
exit();


?>

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


    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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

<body>


    <!-- Логотип -->
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <!-- <h5 class="text-white font-size-20">Welcome Back !</h5> -->
                                <p class="text-white-50 mb-0">Добро пожаловать!</p>
                                <a class="logo logo-admin mt-4">
                                    <img src="../assets/images/logoEX.png" alt="Логотип" height="48">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="index.php">

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Логин</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Введите логин">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Пароль</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Введите пароль">
                                    </div>


                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                                            Войти</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- /Right-bar -->

    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>
    <script src="../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Required datatable js -->
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/libs/jszip/jszip.min.js"></script>
    <script src="../assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="../assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>