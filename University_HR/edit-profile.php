<?php 
require_once "header.php";
?>

<div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Изменить профиль</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="profile.php">Профиль</a></li>
                                    <li class="breadcrumb-item active">Изменить профиль</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
               
                <div class="row justify-content-center" style="margin-top: 25px;">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form class="custom-validation" action="#">
                    <div class="mb-3">
                        <label class="form-label">Почта:</label>
                        <div>
                            <input type="email" class="form-control" required parsley-type="email"
                                placeholder="Email" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Номер телефона:</label>
                        <div>
                            <input data-parsley-type="number" type="text" class="form-control" required
                                placeholder="Телефон" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Пароль:</label>
                        <div>
                            <input data-parsley-type="password" type="password" class="form-control" required
                                placeholder="Пароль" />
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success waves-effect waves-light">
                            Сохранить
                        </button>
                        <button type="reset" class="btn btn-primary waves-effect waves-light">
                            Очистить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
require_once "footer.php";
?>