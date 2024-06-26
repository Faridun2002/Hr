
<?php 
require_once "header.php";
?>

<?php
session_start();

if (empty($_SESSION["Username"])) {
    header("Location: ./login.php");
    exit();
}


$Username = $_SESSION["Username"];
//  database connection
require_once "conn.php";

// $sql = "SELECT leave_id, full_name, reason, start_date, end_date, comments, status  FROM employee_leave";

$sql = "SELECT * FROM employee_leave";


$result = mysqli_query($conn , $sql);

$i = 1;
echo $Username;

?>

<style>
    #commentText {
        word-wrap: break-word; /* Для поддержки переноса слов */
        overflow-wrap: break-word; /* Альтернативное свойство для поддержки переноса слов */
        overflow-y: auto; /* Если текст слишком большой, добавляется вертикальный скролл */
        max-height: 300px; /* Опционально: ограничиваем высоту блока, чтобы избежать слишком больших модальных окон */
    }
    .status-accepted {
    color: green; /* Цвет текста для принятой заявки */
}

.status-rejected {
    color: red; /* Цвет текста для отклоненной заявки */
}

</style>


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Сотрудники</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- Подключение стилей DataTables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Список заявок</h3>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th class="text-center">ФИО</th>
                                        <th>Причина</th>
                                        <th>Дата начало</th>
                                        <th>Дата окончания</th>
                                        <th>Комментария</th>
                                        <th class="text-center">Статус  </th>
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
                                            $status = ($rows["status"] == "На рассмотрении директора") ? "На рассмотрении директора" : $rows["status"];
                                            $leave_id = $rows["leave_id"];    
                                            ?>
                                    <tr>
                                        <th scope="row"><?php echo "$i."; ?></th>
                                        <td><?php echo $fullname; ?></td>
                                        <td><?php echo $reason; ?></td>
                                        <td><?php echo $start_date; ?></td>
                                        <td><?php echo $end_date; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary view-comments"
                                                data-bs-toggle="modal" data-bs-target="#myModal<?php echo $leave_id; ?>"
                                                data-comment="<?php echo htmlspecialchars($comments); ?>">
                                                Посмотреть
                                            </button>

                                        </td>
                                        <td>
                                        <?php  
if ($status == 'В ожидании') {
    echo "<span class='status'>В ожидании</span>";

} 
 else {
    if ($status == 'Принято') {
        echo "<span class='status-accepted'>Принять</span>";
    } 
    // Если заявка отклонена
    else if ($status == 'Отклонено') {
        echo "<span class='status-rejected'>Отклонено</span>";
    }
    // Если заявка на рассмотрении директора
    
    // Показать статус, если он не "ожидает"
}
?>
</td>

                                    </tr>
                                    <?php 
                    $i++;
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>Заявление не найдены</td></tr>";
            }
            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Подключение jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Подключение библиотеки DataTables -->
        <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "language": {
                    "lengthMenu": "Показать _MENU_ записей на странице",
                    "zeroRecords": "Ничего не найдено",
                    "info": "Показано с _START_ по _END_ из _TOTAL_ записей",
                    "infoEmpty": "Показано с 0 по 0 из 0 записей",
                    "infoFiltered": "(отфильтровано из _MAX_ записей)",
                    "search": "Поиск:",
                    "paginate": {
                        "first": "Первая",
                        "last": "Последняя",
                        "next": "Следующая",
                        "previous": "Предыдущая"
                    }
                }
            });
        });
        </script>
  <!-- Модальное окно для комментариев -->
  <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Комментария</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="commentText">
           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"
                        data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var viewButtons = document.querySelectorAll('.view-comments');
        var modalCommentText = document.getElementById('commentText');

        viewButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var commentText = this.getAttribute('data-comment');
                modalCommentText.innerHTML = commentText;
                $('#commentModal').modal('show');
            });
        });
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



        <?php 
require_once "footer.php";
?>