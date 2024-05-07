<?php 
require_once "header.php";
?>

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
            $sql = "INSERT INTO employee_leave (reason, start_date, end_date, comments, full_name, status) 
                    VALUES ('$reason', '$startdate', '$enddate', '$comments', '$fullname', 'В ожидании')";
        
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // Успешно добавлено
                $reason = $startdate = $enddate = "";
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
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Отправить заявку</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Заявка</a></li>
                            <li class="breadcrumb-item active">Отправить заявку</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <!-- Центрируем форму -->
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation mx-auto" method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                            <!-- Добавлен класс mx-auto -->
                            <h3>Отправить заявку</h3>

                            <div class="mb-3 row">
                                <label for="reason" class="col-md-2 col-form-label">Причина</label>
                                <div class="col-md-10">
                                    <select class="form-select"  id="reason" name="reason">
                                        <option disabled selected>Выбрать</option>
                                        <option>Отпуск</option>
                                        <option>Командировка</option>
                                        <option>Больничный</option>
                                        <option>Увольнение</option>
                                    </select>
                                <span class="error"><?php echo $reasonErr; ?></span>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="startdate" class="col-md-2 col-form-label">Дата начало</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" value="<?php echo $startdate; ?>"  name="startDate">
                                    <?php echo $startdateErr; ?>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="enddate" class="col-md-2 col-form-label">Дата окончания</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date"  value="<?php echo $enddate; ?>"  name="endDate">
                                    <?php echo $enddateErr; ?>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="comments" class="col-md-2 col-form-label">Комментарии</label>
                                <div class="col-md-10">
                                    <textarea required class="form-control" value="<?php echo $comments; ?>"  name="comments" rows="5"></textarea>
                                </div>
                            </div>


                            <div class="text-center">
                                <!-- Центрируем кнопку -->
                                <input type="submit" value="Отправить" class="btn btn-primary" name="signin" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <?php 
require_once "footer.php";
?>