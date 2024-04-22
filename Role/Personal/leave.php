<?php 
require_once "header.php";
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
                        <form class="needs-validation mx-auto" novalidate>
                            <!-- Добавлен класс mx-auto -->
                            <h3>Отправить заявку</h3>

                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Причина</label>
                                <div class="col-md-10">
                                    <select class="form-select">
                                        <option disabled selected>Выбрать</option>
                                        <option>Отпуск</option>
                                        <option>Командировка</option>
                                        <option>Больничный</option>
                                        <option>Увольнение</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-date-input" class="col-md-2 col-form-label">Дата начало</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" value="" id="example-date-input">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-date-input" class="col-md-2 col-form-label">Дата окончания</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" value="" id="example-date-input">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-date-input" class="col-md-2 col-form-label">Комментарии</label>
                                <div class="col-md-10">
                                <textarea required class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            
                          
                            <div class="text-center">
                                <!-- Центрируем кнопку -->
                                <button class="btn btn-primary" type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        <?php 
require_once "footer.php";
?>