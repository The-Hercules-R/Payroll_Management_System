<?php
include '../Model/connecttion.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Generate Salary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .form-control {
            width: 50%;
        }
    </style>
</head>

<body>

    <form action="../pages/report.php" method="POST">
        <div class="container mt-3">
            <h2>Payslip</h2>
            <p>Payment slip for the month of <?php echo date("M-Y") ?></p>
            <table class="table table-hover">
                <tbody>



                    <?php
                    $id = $_GET['id'];


                    $sql = "SELECT * FROM  `add_employee` WHERE `id` = $id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $salary =  $row['basicSalary'];
                    ?>
                            <tr>
                                <td>Employee name :</td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Employee ID :</td>
                                <td>
                                    <?php echo $row['id'] ?>
                                </td>
                            </tr>
                            
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>




                </tbody>
            </table>
        </div>
        <div class="container mt-5">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Earning</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic Salary</td>
                        <td>
                            <input type="text" class="form-control" value="<?php echo $salary ?>" name="salary">
                        </td>
                    </tr>
                    <tr>
                        <td>OverTime</td>
                        <td>
                            <input type="text" class="form-control" id="ot" name="ot" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Sales Incentive</td>
                        <td>
                            <input type="text" class="form-control" id="incentive" name="incentive" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Special Allowance</td>
                        <td>
                            <input type="text" class="form-control" id="allowance" name="allowance" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Bonus</td>
                        <td>
                            <input type="text" class="form-control" id="bonus" name="bonus" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="generate" class="btn btn-info">Generate Salary</button>
                            <a href="../pages/home.html">
                                <button type="button" class="btn btn-info">Back</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </form>




    </div>
    </div>
    </div>

    </div>

</body>

</html>