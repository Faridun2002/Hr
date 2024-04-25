<?php 
require_once "header.php";
require_once "conn.php"; // Подключение к базе данных

$sql = "SELECT departments.Department_Id, departments.Department_Name, faculties.Faculty_Name
        FROM departments
        INNER JOIN faculties ON departments.Department_Id = faculties.Faculty_Id";
$result = mysqli_query($conn , $sql);

$i = 1;
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
                        <h4>Департаменты</h4>
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Факультет</th>
                                        <th>Кафедра</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(mysqli_num_rows($result) > 0){
                                        while($rows = mysqli_fetch_assoc($result)) {
                                            $Department_Id = $rows["Department_Id"];
                                            $Department_Name = $rows["Department_Name"];
                                            $Faculty_Name = $rows["Faculty_Name"];
                                    ?>
                                    <tr id="row-<?php echo $Department_Id; ?>">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $Faculty_Name; ?></td>
                                        <td><?php echo $Department_Name; ?></td>
                                        <td>
                                            <a href='delete-departament.php?id=<?php echo $Department_Id; ?>'
                                                class='btn-sm btn-primary ml-2'
                                                onclick="return confirm('Вы уверены, что хотите удалить этот Depart?')">
                                                <span><i class='fa fa-trash'></i></span> </a>
                                        </td>
                                    </tr>
                                    <?php 
                                        $i++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>Depart не найдены!</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>
