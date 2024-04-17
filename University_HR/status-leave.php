<?php 
require_once "header.php";
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
                                        <th>Дата начало</th>
                                        <th>Дата окончания</th>
                                        <th>Комментария</th>
                                        <th>Статус</th>
                                        <th>Действие</th>

                                    </tr>
                                </thead>

                                </tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ааааааааа Бббббббббб Ввввввввв</td>
                                    <td>Командировка</td>
                                    <td>12.22.22</td>
                                    <td>12.33.22</td>
                                    <td>ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ< ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ</td>
                                    <td style="color: green;">Утвержден</td>
                                    <td class="text-center">
                                        <a href="#" id="bin" class="btn-sm btn-primary">
                                            <span class="fs-3"><i class="bx bx-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>Ааааааааа Бббббббббб Вввввввввв</td>
                                    <td>Отпуск</td>
                                    <td>12.22.22</td>
                                    <td>12.33.22</td>
                                    <td>ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ< ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ</td>
                                    <td style="color: red;">Отклонен</td>
                                    <td class="text-center">
                                        <a href="#" id="bin" class="btn-sm btn-primary">
                                            <span class="fs-3"><i class="bx bx-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <th scope="row">2</th>
                                    <td>Ааааааааа Бббббббббб Вввввввввввв</td>
                                    <td>Отпуск</td>
                                    <td>12.22.22</td>
                                    <td>12.33.22</td>
                                    <td>ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ< ТЕКТ ТЕКСТ ТЕКСТ ТЕКТ ТЕКСТ ТЕКСТ</td>
                                    <td><a">Ожидание</a>
                                    </td>
                                            <td class="text-center">
                                        <a href="#" id="bin" class="btn-sm btn-primary">
                                            <span class="fs-3"><i class="bx bx-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <?php 
require_once "footer.php";
?>