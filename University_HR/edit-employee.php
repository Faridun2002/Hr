<?php 
require_once "header.php";
?>

<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Изменение данных</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Сотрудники</a></li>
                            <li class="breadcrumb-item active">Управлять сотрудниками</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Редактирование информации о сотрудников</h4>
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ФИО</th>
                                        <th>Дата рождения</th>
                                        <th>Место рождения</th>
                                        <th>Должность</th>
                                        <th>Степень</th>
                                        <th>Факультет</th>
                                        <th>Кафедры</th>
                                        <th>Роль пользователя</th>
                                        <th>Email</th>
                                        <th>Номер телефона</th>
                                        <th>Табельный номер</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">1</td>
                                        <td data-field="fio">David McHenry</td>
                                        <td data-field="birthdate">1998-04-15</td>
                                        <td data-field="birthplace">New York</td>
                                        <td data-field="position">Engineer</td>
                                        <td data-field="degree">Master</td>
                                        <td data-field="faculty">Engineering</td>
                                        <td data-field="department">Mechanical Engineering</td>
                                        <td data-field="role">Employee</td>
                                        <td data-field="email">david@example.com</td>
                                        <td data-field="phone">123-456-7890</td>
                                        <td data-field="employee_id">123456</td>
                                        <td style="width: 100px">
                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm delete" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>

                                        <tr data-id="2">
                                        <td data-field="id" style="width: 80px">2</td>
                                        <td data-field="fio">David McHenry</td>
                                        <td data-field="birthdate">1998-04-15</td>
                                        <td data-field="birthplace">New York</td>
                                        <td data-field="position">Engineer</td>
                                        <td data-field="degree">Master</td>
                                        <td data-field="faculty">Engineering</td>
                                        <td data-field="department">Mechanical Engineering</td>
                                        <td data-field="role">Employee</td>
                                        <td data-field="email">david@example.com</td>
                                        <td data-field="phone">123-456-7890</td>
                                        <td data-field="employee_id">123456</td>
                                        <td style="width: 100px">
                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm delete" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>

                                        <tr data-id="3">
                                        <td data-field="id" style="width: 80px">3</td>
                                        <td data-field="fio">David McHenry</td>
                                        <td data-field="birthdate">1998-04-15</td>
                                        <td data-field="birthplace">New York</td>
                                        <td data-field="position">Engineer</td>
                                        <td data-field="degree">Master</td>
                                        <td data-field="faculty">Engineering</td>
                                        <td data-field="department">Mechanical Engineering</td>
                                        <td data-field="role">Employee</td>
                                        <td data-field="email">david@example.com</td>
                                        <td data-field="phone">123-456-7890</td>
                                        <td data-field="employee_id">123456</td>
                                        <td style="width: 100px">
                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm delete" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> 
        </div> 

    </div>
    
    <?php 
require_once "footer.php";
?>