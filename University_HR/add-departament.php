<?php 
require_once "header.php";
?>

<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Департамент</h4>
                </div>
            </div>
        </div>

        <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Создать Департамент</h4>
                <form id="createDepartmentForm">
                    <div class="form-group">
                        <label for="facultyInput">Факультет</label>
                        <input type="text" class="form-control" id="facultyInput" placeholder="Введите название факультета">
                    </div>
                    <div class="form-group">
                        <label for="departmentInput">Кафедра</label>
                        <input type="text" class="form-control" id="departmentInput" placeholder="Введите название кафедры">
                    </div>
                </form>
                <div class="row mt-3 text-center">
                    <div class="col-12">
                        <button class="btn btn-success">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php 
require_once "footer.php";
?>