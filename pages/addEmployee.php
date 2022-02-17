<?php
    include '../Model/connecttion.php';
?>
<?php
        
    if(isset($_POST['add'])){
        $success = "";
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
        $sql = "INSERT INTO `add_employee` (`name`, `address`, `city`, `pincode`, `mobile`, `Branch`, `basicSalary`, `bank`, `e-mail`, `degree`) VALUES ('$name', '$address', '$city', '$pincode', '$mobile', '$branch', '$basicsalary', '$bank', '$email', '$degree');";
            if ($conn->query($sql) === TRUE) {
              $success = '<div class="container mt-2" style="width:42%">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Your recode has been added.
              </div>
            </div>';
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Employee</title>
    <link rel="stylesheet" href="../styles/addEmploye.css" />
    <script src="../scripts/addEmploye.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="../scripts/home.js"></script>
    <link rel="stylesheet" href="../styles/home.css" />
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-sm">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/home.html">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/addEmployee.php"
              >Add Employee</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/employeeReport.html"
              >Employee Report</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/salary.html"
              >Salary</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/salaryReport.html"
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
    <?php echo isset($success) ? $success : "" ?>
    <div class="table_input mt-lg-5">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table border="none" class="table table-borderless form-control-sm">
          <tr>
            <td>Name</td>
            <td><input id="_name" name="name" type="text" /></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input id="_address" name="address" type="text" /></td>
            <td>Basic Salary</td>
            <td><input id="_salary" name="salary" type="text" /></td>
          </tr>
          <tr>
            <td>City</td>
            <td><input id="_city" name="city" type="text" /></td>
            <td>Bank Account</td>
            <td><input id="_bank" name="bank" type="text" /></td>
          </tr>
          <tr>
            <td>PinCode</td>
            <td><input id="_pin" name="pincode" type="text" /></td>
            <td>E-mail</td>
            <td><input id="_mail" name="email" type="email" /></td>
          </tr>
          <tr>
            <td>Mobile</td>
            <td><input id="_mobile" name="mobile" type="text" /></td>
            <td>Degree</td>
            <td><input id="_degree" name="degree" type="text" /></td>
          </tr>
          <tr>
            <td>Branch</td>
            <td><input id="_branch" name="branch" type="text" /></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <button type="button" onclick="reset()" class="btn btn-danger">
                Reset
              </button>
            </td>
            <td>
              <button type="submit" name="add" class="btn btn-primary">
                Add
              </button>
            </td>
          </tr>
        </table>
      </form>
    </div>
    <div class="mt-1">
      <table class="table table-primary table-striped add_table table-hover" id="myTable">
        <thead>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th>City</th>
          <th>PinCode</th>
          <th>Basic Salary</th>
          <th>Bank Account</th>
          <th>Degree</th>
          <th>Branch</th>
          <th>Mobile</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody>
        
       <?php

              $sql = "SELECT * FROM  `add_employee`";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['address'] ?>v</td>
                      <td><?php echo $row['city'] ?></td>
                      <td><?php echo $row['pincode'] ?></td>
                      <td><?php echo $row['basicSalary'] ?></td>
                      <td><?php echo $row['bank'] ?></td>
                      <td><?php echo $row['degree'] ?></td>
                      <td><?php echo $row['Branch'] ?></td>
                      <td><?php echo $row['mobile'] ?></td>
                      <td><?php echo $row['e-mail'] ?></td>
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
    
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
      } );

      function reset(){
    
    document.getElementById('_name').innerHTML ='';
    document.getElementById('_address').innerHTML='';
    document.getElementById('_salary').innerHTML='';
    document.getElementById('_city').innerHTML='';
    document.getElementById('_bank').innerHTML='';
    document.getElementById('_pin').innerHTML='';
    document.getElementById('_mail').innerHTML='';
    document.getElementById('_mobile').innerHTML='';
    document.getElementById('_degree').innerHTML='';
    cdocument.getElementById('_branch').innerHTML='';

}
  </script>
  </body>
</html>
