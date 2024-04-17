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
                    <h4 class="page-title mb-0 font-size-18">Сотрудники</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Страницы</a></li>
                            <li class="breadcrumb-item active">Добавить сотрудника>
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
                        <h3>Добавить сотрудника</h3>
                        <form class="custom-validation" action="#">
                            <div class="mb-3">
                                <label class="form-label">ФИО</label>
                                <input type="text" class="form-control" required placeholder="Введите ФИО" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Дата рождения</label>
                                <input type="date" class="form-control" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Место рождения</label>
                                <input type="text" class="form-control" required placeholder="Введите место рождения" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Должность</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите должность</option>
                                    <option value="">Преподователь</option>
                                    <option value="">Старший Преподователь</option>
                                    <option value="">Ассистент</option>
                                    <option value="">Бухгалтер</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Степень</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите степень</option>
                                    <option value="">Кандидат наук</option>
                                    <option value="">Доцент</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Факультет</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите факультет</option>
                                    <option value="">Информатика и энергетика</option>
                                    <option value="">Строительство и транспорт</option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Кафедры</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите кафедру</option>
                                    <option value="">Программирование и ИС</option>
                                    <option value="">Физикии и химии</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Роль пользователя</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите роль пользователя</option>
                                    <option value="director">Директор</option>
                                    <option value="HR">Начальник отдела кадров</option>
                                    <option value="employee">Сотрудник</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required placeholder="Введите email" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Номер телефона</label>
                                <input type="tel" class="form-control" required placeholder="Введите номер телефона" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Табельный номер</label>
                                <input type="text" class="form-control" required
                                    placeholder="Введите табельный номер" />
                            </div>

                            <div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                        Добавить
                                    </button>
                                    <button type="reset" class="btn btn-primary waves-effect waves-light">
                                        Очистить
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Page-content -->

    <?php 
require_once "footer.php";
?>