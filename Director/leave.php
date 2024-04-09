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
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h3>Таблица заявок</h3>

                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th class="text-center">ФИО</th>
                                        <th>Причина</th>
                                        <th>Дата начало</th>
                                        <th>Дата окончания</th>
                                        <th class="text-center">Статус   <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Принять
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Отклонить
                                    </button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Принять
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Отклонить
                                    </button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td>    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Принять
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Отклонить
                                    </button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                </div>



            <?php 
require_once "footer.php";
?>