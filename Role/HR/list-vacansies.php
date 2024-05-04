<?php 
require_once "header.php";
?>


<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Вакансия</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Страницы</a></li>
                            <li class="breadcrumb-item active">Вакансия>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Добавить вакансию</h3>
                        <table id="vacanciesTable" class="table">
                            <thead>
                                <tr data-id="1">
                                    <td>Вакансия 1</td>
                                    <td>Описание вакансии 1</td>
                                    <td>Требования кандидатов 1</td>
                                    <td>1000$</td>
                                    <td>Город 1</td>
                                    <td>
                                        <a href="edit-vacansies.php"
                                            class="btn btn-sm btn-primary editVacancyButton">Редактировать</a>
                                    </td>
                                </tr>
                                <tr data-id="2">
                                    <td>Вакансия 2</td>
                                    <td>Описание вакансии 2</td>
                                    <td>Требования кандидатов 2</td>
                                    <td>2000$</td>
                                    <td>Город 2</td>
                                    <td>
                                        <a href="edit-vacansies.php"
                                            class="btn btn-sm btn-primary editVacancyButton">Редактировать</a>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Page-content -->

    <?php 
require_once "footer.php";
?>