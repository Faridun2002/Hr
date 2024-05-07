<?php 
require_once "header.php";
?>

<?php
session_start();

if (empty($_SESSION["Username"])) {
    header("Location: ./login.php");
    exit();
}

require_once "conn.php";

$Username = $_SESSION["Username"];

// Запрос для получения данных о заявках на отпуск для текущего пользователя
$sql = "SELECT * FROM employee_leave";

$result = mysqli_query($conn, $sql);

?>

<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Заявки</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Заявки</a></li>
                            <li class="breadcrumb-item active">Статус заявку</li>
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
                        <h3>Статус заявки</h3>
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered">
                                <!-- Добавлен класс table-bordered -->
                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th>ФИО</th>
                                        <th>Причина</th>
                                        <th>Дата начала</th>
                                        <th>Дата окончания</th>
                                        <th>Комментария</th>
                                        <th>Статус</th>
                                        <th>Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            $start_date = $rows["start_date"];
                                            $end_date = $rows["end_date"];
                                            $fullname = $rows["full_name"];
                                            $reason = $rows["reason"];
                                            $comments = $rows["comments"];
                                            $status = $rows["status"];
                                            $leave_id = $rows["leave_id"];

                                            echo "<tr>";
                                            echo "<td>$leave_id</td>";
                                            echo "<td>$fullname</td>";
                                            echo "<td>$reason</td>";
                                            echo "<td>$start_date</td>";
                                            echo "<td>$end_date</td>";
                                            echo "<td>$comments</td>";
                                            echo "<td>$status</td>";
                                            echo "<td>";
                                            echo "<a href='delete-leave.php?leave_id=$leave_id' id='bin' class='btn-sm btn-primary'><span><i class='bx bx-trash bx-md'></i></span></a>";

                                            echo "</td>";
                                            echo "</tr>";
                                            $leave_id++;
                                        }
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
require_once "footer.php";
?>