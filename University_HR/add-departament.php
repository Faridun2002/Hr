

        <?php
require_once "header.php";
require_once "conn.php"; // Include the connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $facultyName = mysqli_real_escape_string($conn, $_POST['facultyInput']); // Sanitize input
  $departmentName = mysqli_real_escape_string($conn, $_POST['departmentInput']); // Sanitize input

  // Check if faculty already exists (optional)
  $sqlCheckFaculty = "SELECT Faculty_Id FROM faculties WHERE Faculty_Name = '$facultyName'";
  $resultCheckFaculty = mysqli_query($conn, $sqlCheckFaculty);

  if (mysqli_num_rows($resultCheckFaculty) > 0) {
    // Faculty already exists, retrieve its ID
    $row = mysqli_fetch_assoc($resultCheckFaculty);
    $facultyId = $row['Faculty_Id'];
  } else {
    // Insert faculty if it doesn't exist
    $sqlInsertFaculty = "INSERT INTO faculties (Faculty_Name) VALUES ('$facultyName')";
    $resultInsertFaculty = mysqli_query($conn, $sqlInsertFaculty);
    if ($resultInsertFaculty) {
      $facultyId = mysqli_insert_id($conn); // Get the newly inserted faculty ID
    } else {
      echo "Ошибка при добавлении факультета."; // Error message
      exit();
    }
  }

  // Insert department record
  $sqlInsertDepartment = "INSERT INTO departments (Department_Name, Faculty_Id) VALUES ('$departmentName', $facultyId)";
  $resultInsertDepartment = mysqli_query($conn, $sqlInsertDepartment);

  if ($resultInsertDepartment) {
    echo "Департамент успешно добавлен."; // Success message
  } else {
    echo "Ошибка при добавлении департамента."; // Error message
  }
}

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
            <form id="createDepartmentForm" method="post"> <div class="form-group">
                <label for="facultyInput">Факультет</label>
                <input type="text" class="form-control" id="facultyInput" name="facultyInput" placeholder="Введите название факультета">
              </div>
              <div class="form-group">
                <label for="departmentInput">Кафедра</label>
                <input type="text" class="form-control" id="departmentInput" name="departmentInput" placeholder="Введите название кафедры">
              </div>
              <div class="row mt-3 text-center">
                <div class="col-12">
                  <button class="btn btn-success">Сохранить</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<?php
require_once "footer.php";
?>

