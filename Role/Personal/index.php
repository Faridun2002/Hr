<?php 
require_once "header.php";

session_start();
if( empty($_SESSION["Username"]) ){
    header("Location: ./login.php");
}

require_once "conn.php";

$sql_command = "SELECT e.*, d.Degree_Name, e.Path_Photo 
                FROM employees e 
                INNER JOIN degrees d ON e.Degree_Id = d.Degree_Id 
                WHERE e.Username = '{$_SESSION['Username']}'";

$result = mysqli_query($conn, $sql_command);

if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        $Full_Name = ucwords($rows["Full_Name"]);
        $Degree_Name = $rows["Degree_Name"];    
        $Path_Photo = $rows["Path_Photo"];   
    }
}
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
                                                            <img src="upload/<?php if(!empty($Path_Photo)){ echo $Path_Photo; }else{ echo "1.jpg"; } ?>" alt=""
                                                                class="avatar-sm rounded-circle">
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-16 mb-1"><?php echo $Full_Name; ?></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><?php echo $Degree_Name; ?></td>
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