<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update employee info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar sticky-top navbar-expand-sm">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/addEmployee.php"
              >Add Employee</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/employeeReport.php"
              >Employee Report</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/salaryReport.php"
              >Salary Report</a
            >
          </li>
        </ul>
      </div>
      <button id="btn_signout" class="button-82-pushable">
        <span class="button-82-shadow"></span>
        <span class="button-82-edge"></span>
        <span class="button-82-front text"> Sign Out </span>
      </button>
    </nav>
        <?php
        include '../Model/connecttion.php';

        $up_id = $_GET['id_up'];
        $sql = "SELECT * FROM  `add_employee` WHERE `id` = $up_id";
        $result = $conn->query($sql);

        // update ==========================================
        $success = "";
if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $bank = $_POST['bank'];
        $pincode = $_POST['pincode'];
        $mobile = $_POST['mobile'];
        $branch = $_POST['branch'];
        $basicsalary = $_POST['salary'];
        $email = $_POST['email'];
        $degree = $_POST['degree'];
        $sql = "UPDATE `add_employee` SET `name` = '$name', `address` = '$address', `city` = '$city', `pincode` = '$pincode', `mobile` = '$mobile', `Branch` = '$branch', `basicSalary` = '$basicsalary', `bank` = '$bank', `e-mail` = '$email', `degree` = '$degree' WHERE `add_employee`.`id` = $up_id;";
        //$up_id = $_GET['id_up'];
        // $sql = "UPDATE `add_employee` SET name = '$name', address= '$address', city = '$city', pincode = '$pincode', mobile = '$mobile', Branch = '$branch', basicSalary = '$basicsalary', bank = '$bank', e-mail = '$email', degree = '$degree' WHERE `id` = $up_id";

    if ($conn->query($sql) === TRUE) {
        $success = '<div class="container mt-2" style="width: 50px%">
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Your recode has been updated.
            </div>
        </div>';;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
        //=================================================

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
        <?php
        echo isset($success) ? $success : "";
        ?>
                <div class="container shadow-lg p-3 mb-5 bg-white rounded mt-2">
                <h2 class="mt-2">Employee name : <?php echo $row['name'] ?></h2>
                <form class="mt-5" method="POST" action="">
                    <div class="row">
                        <div class="col-6">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
                        </div>
                        <div class="col-6">
                            <label for="pwd">Basic Salary:</label>
                            <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $row['basicSalary'] ?>">
                        </div>
                        <div class="col-6 mt-2">
                            <label for="email">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="pwd">Bank Account:</label>
                            <input type="text" class="form-control" id="bank" name="bank" value="<?php echo $row['bank'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="email">City:</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="pwd">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['e-mail'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="email">PinCode:</label>
                            <input type="text" class="form-control" id="code" name="pincode" value="<?php echo $row['pincode'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="pwd">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="email">Branch:</label>
                            <input type="text" class="form-control" id="branch" name="branch" value="<?php echo $row['Branch'] ?>">
                        </div>
                        <div class="col-6  mt-2">
                            <label for="pwd">Degree:</label>
                            <input type="text" class="form-control" id="degree" name="degree" value="<?php echo $row['degree'] ?>">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary ml-3 mt-5">Submit your update</button>
                        <a type="button" href="../pages/employeeReport.php" class="btn btn-primary ml-3 mt-5">Back</a>

                <?php

            }
        } else {
            echo "0 results";
        }
                ?>

                    </div>
                </form>
    </div>

</body>

</html>