
<?php 

     // Подключение к базе данных
     session_start();

     if (empty($_SESSION["Username"])) {
         header("Location: ./login.php");
         exit();
     }

$reasonErr = $startdateErr = $enddateErr = $commentsErr  = "";
$reason = $startdate = $enddate = $comments  = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if( empty($_REQUEST["reason"]) ){
        $reasonErr = "<p style='color:red'>* Требуется причина</p>";    
    }else{
        $reason = $_REQUEST["reason"];
    }
 
    if( empty($_REQUEST["startDate"]) ){
        $startdateErr = "<p style='color:red'>* Требуется дата начала</p>";    
    }else{
        $startdate = $_REQUEST["startDate"];
    }
     
    if( empty($_REQUEST["endDate"]) ){
        $enddateErr = "<p style='color:red'>* Требуется дата окончания</p>";    
    }else{
        $enddate = $_REQUEST["endDate"];
    }

    if( empty($_REQUEST["comments"]) ){
        $commentsErr = "<p style='color:red'>* Требуется comments </p>";    
    }else{
        $comments = $_REQUEST["comments"];
    }

    if (!empty($reason) && !empty($startdate) && !empty($enddate) && !empty($comments)) {
          
   
        
        // Получение ФИО сотрудника из базы данных на основе логина
        $fullname = "";
        require_once "conn.php";
        
        $sql_fullname = "SELECT Full_Name FROM employees WHERE Username = '{$_SESSION['Username']}'";
        $result_fullname = mysqli_query($conn, $sql_fullname);
        
        if ($result_fullname && mysqli_num_rows($result_fullname) > 0) {
            $row_fullname = mysqli_fetch_assoc($result_fullname);
            $fullname = $row_fullname["Full_Name"];
        }
        
        // Вставка ФИО сотрудника в SQL-запрос
        if (!empty($reason) && !empty($startdate) && !empty($enddate) && !empty($comments)) {
            // Подключение к базе данных
            require_once "conn.php";
        
            // Убедитесь, что переменные правильно защищены от SQL-инъекций
            $reason = mysqli_real_escape_string($conn, $reason);
            $startdate = mysqli_real_escape_string($conn, $startdate);
            $enddate = mysqli_real_escape_string($conn, $enddate);
            $comments = mysqli_real_escape_string($conn, $_REQUEST["comments"]);
        
            // SQL-запрос с ФИО сотрудника
            $sql = "INSERT INTO employee_leave (reason, start_date, end_date, comments, full_name, status, Username) 
            VALUES ('$reason', '$startdate', '$enddate', '$comments', '$fullname', 'В ожидании', '{$_SESSION['Username']}')";
    
        
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // Успешно добавлено
                $reason = $startdate = $enddate = "";
                header("Location: status-leave.php"); // Перенаправление на другую страницу
                exit(); // Важно завершить выполнение скрипта после пе
            } else {
                // Ошибка при выполнении запроса
                echo "Ошибка: " . mysqli_error($conn);
            }
        
            // Закрыть подключение к базе данных
            mysqli_close($conn);
        }
    }
}
?>