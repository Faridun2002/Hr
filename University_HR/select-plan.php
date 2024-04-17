<?php 
require_once "header.php";
?>

<link href="../assets/css/styles.css" rel="stylesheet" />


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">ПЛАН</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">План</a></li>
                            <li class="breadcrumb-item active">Выбрать план</li>
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
                        <h3>Список планов</h3>
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered">
                                <!-- Добавлен класс table-bordered -->
                                <thead class="table-light">
                                    <tr>
                                        <th>№</th>
                                        <th class="text-center">Норма</th>
                                        <th>Кредит</th>
                                        <th>Примечание</th>
                                        <th>Выбрать</th> <!-- Новый заголовок -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Аъзои гурӯхи кории Шӯрои олимони донишгоҳ</td>
                                        <td>0.833</td>
                                        <td>20 соат барои 1 комиссия (фармоиши ректор)</td>
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Аъзои Шӯрои методии донишгоҳ</td>
                                        <td>1.250</td>
                                        <td>30 соат (фармоиши ректор)</td>
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Аъзои Шӯрои методии факултет ва гурӯхҳои кории факултет</td>
                                        <td>0.833</td>
                                        <td>20 соат (фармоиши ректор)</td>
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Аъзои гурӯхи кории Шӯрои олимони донишгоҳ</td>
                                        <td>0.833</td>
                                        <td>20 соат барои 1 комиссия (фармоиши ректор)</td>
                                        <!-- Новый столбец с чекбоксом -->
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Аъзои Шӯрои методии донишгоҳ</td>
                                        <td>1.250</td>
                                        <td>30 соат (фармоиши ректор)</td>
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <!-- Новый столбец с чекбоксом -->

                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Аъзои Шӯрои методии факултет ва гурӯхҳои кории факултет</td>
                                        <td>0.833</td>
                                        <td>20 соат (фармоиши ректор)</td>
                                        <td class="text-center">
                                            <label class="checkbox-wrapper">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="button-items mt-3 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <?php 
require_once "footer.php";
?>