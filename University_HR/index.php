<?php 
require_once "header.php";
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
                                <h3>Рейтинг сотрудников</h3>

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
                                        <?php
                                                // Database connection parameters
                                                $servername = "localhost"; // Change this to your MySQL server hostname
                                                $username = "root"; // Change this to your MySQL username
                                                $password = "root"; // Change this to your MySQL password
                                                $database = "university_hr"; // Change this to your MySQL database name

                                                // Create connection
                                                $conn = new mysqli($servername, $username, $password, $database);

                                                // Check connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // SELECT query
                                                $sql = "select r.Rating_Id as Id, IFNULL(e.Path_Photo, '') as Path, e.Full_Name as FullName,pos.Position_Name as Position,CONCAT(r.Credit_Done, '/', r.Credit_Full) as Credit,r.Rating from ratings r
                                                left join employees e on r.Employee_Id = e.Employee_Id
                                                left join positions pos on e.Employee_Id = pos.Position_Id
                                                order by Rating desc";

                                                // Execute query
                                                $result = $conn->query($sql);
                                                $count =0;
                                                // Check if there are any results
                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $count++;
                                                        if ($row["Path"] == "") {
                                                            $row["Path"]= "user.jpg";
                                                        }
                                                        echo "<tr>".
                                                            "   <td class='align-middle'>".$count."</td>".
                                                            "   <td class='align-middle'>".
                                                            "   <div class='d-flex align-items-center'>".
                                                            "       <div class='me-4'> ".
                                                            "           <img src='Photo/".$row["Path"]."' alt='' class='avatar-sm rounded-circle'>".
                                                            "       </div>".
                                                            "       <div>".
                                                            "           <h5 class='font-size-16 mb-1'>".$row["FullName"]."</h5>".
                                                            "       </div>".
                                                            "   </div>".
                                                            "    </td>".
                                                            "   <td class='align-middle'>".$row["Position"]."</td>".
                                                            "   <td class='align-middle'>".$row["Credit"]."</td>".
                                                            "   <td class='align-middle'>".$row["Rating"]."</td>".
                                                            "</tr>";
                                                    }
                                                }

                                                // Close connection
                                                $conn->close();
                                            ?>

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