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
        <form id="editVacancyForm">
            <input type="hidden" id="vacancyId" value="123">
            <!-- Здесь нужно указать ID вакансии, которую редактируем -->
            <div class="mb-3">
                <label for="vacancyTitle" class="form-label">Название вакансии</label>
                <input type="text" class="form-control" id="vacancyTitle" value="Название вакансии" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание вакансии</label>
                <textarea class="form-control" id="description" rows="3" required>Описание вакансии</textarea>
            </div>
            <div class="mb-3">
                <label for="requirements" class="form-label">Требования к кандидатам</label>
                <textarea class="form-control" id="requirements" rows="3" required>Требования к кандидатам</textarea>
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Зарплата</label>
                <input type="text" class="form-control" id="salary" value="Зарплата" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Местоположение</label>
                <input type="text" class="form-control" id="location" value="Местоположение" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Сохранить изменения</button>
            </div>
        </form>

    </div>
    <!-- End Page-content -->

    <?php 
require_once "footer.php";
?>