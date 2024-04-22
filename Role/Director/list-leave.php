<?php 
require_once "header.php";
?> 

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
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th class="text-center">ФИО</th>
                                <th>Причина</th>
                                <th>Дата начала</th>
                                <th>Дата окончания</th>
                                <th>Комментарий</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ааааааааа Бббббббббб</td>
                                <td>Командировка</td>
                                <td>12.22.22</td>
                                <td>12.33.22</td>
                                <td style="white-space: pre-line;">ТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТ</td>
                                <td style="color: green;">Утвержден</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ааааааааа Бббббббббб</td>
                                <td>Командировка</td>
                                <td>12.22.22</td>
                                <td>12.33.22</td>
                                <td style="white-space: pre-line;">ТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТ</td>
                                <td style="color: red;">Отклонен</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ааааааааа Бббббббббб Вввввввввввв</td>
                                <td>Отпуск</td>
                                <td>12.22.23</td>
                                <td>12.33.22</td>
                                <td style="white-space: pre-line;">ТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТТЕКСТ ТЕКСТ ТЕКСТ ТЕКС тЕКСТ ТЕКСТ</td>
                                <td style="color: green;">Утвержден</td>
                            </tr>
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



            <?php 
require_once "footer.php";
?>