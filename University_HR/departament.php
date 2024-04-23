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
                        <h4>Список всех Департаментов</h4>
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Факультет</th>
                                        <th>Кафедра</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "university_hr";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Запрос к базе данных
$sql = "SELECT Departments.Department_id, Departments.Department_Name, Faculties.Faculty_id, Faculties.Faculty_Name 
        FROM Departments 
        INNER JOIN Faculties 
        ON Departments.Department_id = Faculties.Faculty_id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод данных каждой строки в таблицу
    while($row = $result->fetch_assoc()) {
        echo "<tr data-id='" . $row["Department_id"] . "'>";
        echo "<td data-field='id' style='width: 80px'>" . $row["Department_id"] . "</td>";
        echo "<td data-field='faculty'>" . $row["Faculty_Name"] . "</td>";
        echo "<td data-field='department'>" . $row["Department_Name"] . "</td>";
        echo "<td style='width: 100px'>";
        echo "<a class='btn btn-outline-danger btn-sm delete' title='Delete'><i class='fas fa-trash-alt'></i></a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "0 результатов";
}
$conn->close();
?>

                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3 text-center">
    <div class="col-12">
        <button class="btn btn-primary" onclick="redirectToPage()">Добавить</button>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
    function redirectToPage() {
        window.location.href = "add-departament.php";
    }
</script>

    <?php 
require_once "footer.php";
?>