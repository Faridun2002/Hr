<?php 
require_once "header.php";
require_once "conn.php";
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
                                    <?php
                                        // SELECT query
                                        $sql = "select Position_Id as PositionId,Position_Name as PositionName from positions;";

                                        // Execute query
                                        $result = $conn->query($sql);
                                        $count =0;
                                        // Check if there are any results
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='".$row["PositionId"]."'>".$row["PositionName"]."</option>";
                                            }
                                        }
                                    ?>                                   
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Степень</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите степень</option>
                                    <?php
                                        // SELECT query
                                        $sql = "select Degree_Id as DegreeId, Degree_Name as DegreeName from degrees;";

                                        // Execute query
                                        $result = $conn->query($sql);
                                        $count =0;
                                        // Check if there are any results
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='".$row["DegreeId"]."'>".$row["DegreeName"]."</option>";
                                            }
                                        }
                                    ?> 
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Факультет</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите факультет</option>
                                    <?php
                                        // SELECT query
                                        $sql = "select Faculty_Id as FacultyId,Faculty_Name as FacultyName from faculties;";

                                        // Execute query
                                        $result = $conn->query($sql);
                                        $count =0;
                                        // Check if there are any results
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='".$row["FacultyId"]."'>".$row["FacultyName"]."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Кафедры</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите кафедру</option>
                                    <?php
                                        // SELECT query
                                        $sql = "select Department_Id as DepartmentId, Department_Name as DepartmentName from departments;";

                                        // Execute query
                                        $result = $conn->query($sql);
                                        $count =0;
                                        // Check if there are any results
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='".$row["DepartmentId"]."'>".$row["DepartmentName"]."</option>";
                                            }
                                        }
                                    ?> 
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Роль пользователя</label>
                                <select class="form-select" required>
                                    <option disabled selected>Выберите роль пользователя</option>
                                    <?php
                                        // SELECT query
                                        $sql = "select User_Role_Id as UserRoleId, User_Type as UserType from user_roles;";

                                        // Execute query
                                        $result = $conn->query($sql);
                                        $count =0;
                                        // Check if there are any results
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='".$row["UserRoleId"]."'>".$row["UserType"]."</option>";
                                            }
                                        }
                                    ?>
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

                            <div class="mb-3">
                                <label class="form-label">Логин</label>
                                <input type="text" class="form-control" required placeholder="Введите логин" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Пароль</label>
                                <input type="password" class="form-control" required placeholder="Введите пароль" />
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
$conn->close();
require_once "footer.php";
?>