<?php 

session_start(); // Начинаем сессию, если это ещё не сделано

// Проверяем, авторизован ли пользователь
if (isset($_SESSION['Username'])) {
    // Подключаемся к базе данных
    require_once "conn.php";

    // Получаем информацию о текущем пользователе
    $Username = $_SESSION['Username'];
    $sql_query = "SELECT User_Role_Id FROM employees WHERE Username='$Username'";
    $result = mysqli_query($conn, $sql_query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['User_Role_Id'];

        // Проверяем роль пользователя
        if ($role == 'Админ') {
            // Код для администратора
            header("Location: admin/index.php");
            exit;
        } elseif ($role == 'Директор') {
            // Код для директора
            header("Location: Director/index.php");
            exit;
        } elseif ($role == 'Начальник отдела кадров') {
            // Код для начальника отдела кадров
            header("Location: HR/index.php");
            exit;
        } elseif ($role == 'Сотрудник') {
            // Код для сотрудника
            header("Location: employee/index.php");
            exit;
        } else {
            // Неизвестная роль
            echo "Неизвестная роль пользователя!";
        }
    } else {
        // Ошибка запроса
        echo "Ошибка запроса: " . mysqli_error($conn);
    }
} else {
    // Пользователь не авторизован
    echo "Пожалуйста, авторизуйтесь!";
}

?>