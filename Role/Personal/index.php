<?php 
require_once "header.php";
?>
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Панель приборов</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark mb-0">
                                <h3>Ваш рейтинг</h3>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th class="text-center">ФИО</th>
                                                <th>Степень</th>
                                                <th>Кредит</th>
                                                <th>Баллы</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">7</td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-4">
                                                            <img src="../assets/images/users/avatar-7.jpg" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-16 mb-1">Ахмедов Анвар</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">Доктор Наук</td>
                                                <td class="align-middle">20/40</td>
                                                <td class="align-middle">33</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
require_once "footer.php";
?>