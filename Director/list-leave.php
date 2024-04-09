<?php 
require_once "header.php";
?> 

<div class="main-content">

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Сотрудники</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h3>Список заявок</h3>

     
            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>№</th>
                                        <th class="text-center">ФИО</th>
                                        <th>Причина</th>
                                        <th>Дата начало</th>
                                        <th>Дата окончания</th>
                                        <th>Статус</th>
                                        </tr>
                                        </thead>
                
                </tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td style="color: green;">Принять</td>
                                     
                                    </tr>
   <!-- <td>    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Принять
                                    </button> -->
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ааааааааа Бббббббббб</td>
                                        <td>Командировка</td>
                                        <td>12.22.22</td>
                                        <td>12.33.22</td>
                                        <td style="color: red;">Отклонен</td>
                                        <!-- <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Отклонен
                                    </button></td> -->
                                    </tr>
                                    
                            </table>
                        </div>

                    </div>
                </div>
                </div>

            <?php 
require_once "footer.php";
?>